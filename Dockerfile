FROM debian:trixie-slim

LABEL maintainer="sean@malmoset.com" \
      org.opencontainers.image.source="https://github.com/SeanMollet/nginx-php-fpm" \
      org.opencontainers.image.description="Unofficial successor to wyveo/nginx-php-fpm, patched for php2shell (CVE-2026-109618, CVE-2026-109619). nginx + PHP-FPM 8.2.35."

# Let the container know that there is no tty
ENV DEBIAN_FRONTEND noninteractive
ENV php_conf /etc/php/8.2/fpm/php.ini
ENV fpm_conf /etc/php/8.2/fpm/pool.d/www.conf
ENV COMPOSER_VERSION 2.10.3

# Install Basic Requirements
RUN buildDeps='curl gcc make autoconf libc-dev zlib1g-dev pkg-config' \
    && set -x \
    && apt-get update \
    && apt-get install --no-install-recommends $buildDeps --no-install-suggests -q -y gnupg2 dirmngr wget apt-transport-https lsb-release ca-certificates \
    && wget -qO- https://nginx.org/keys/nginx_signing.key | gpg --dearmor -o /usr/share/keyrings/nginx.gpg \
    && echo "deb [signed-by=/usr/share/keyrings/nginx.gpg] http://nginx.org/packages/mainline/debian/ $(lsb_release -sc) nginx" > /etc/apt/sources.list.d/nginx.list \
    && printf "Package: *\nPin: origin nginx.org\nPin: release o=nginx\nPin-Priority: 900\n" > /etc/apt/preferences.d/99nginx \
    && wget -qO /usr/share/keyrings/sury-php.gpg https://packages.sury.org/php/apt.gpg \
    && echo "deb [signed-by=/usr/share/keyrings/sury-php.gpg] https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list \
    && apt-get update \
    && apt-get install --no-install-recommends --no-install-suggests -q -y \
            apt-utils \
            nano \
            zip \
            unzip \
            python3-pip \
            git \
            nginx \
            php8.2-fpm \
            php8.2-cli \
            php8.2-bcmath \
            php8.2-dev \
            php8.2-common \
            php8.2-opcache \
            php8.2-readline \
            php8.2-mbstring \
            php8.2-curl \
            php8.2-gd \
            php8.2-imagick \
            php8.2-mysql \
            php8.2-zip \
            php8.2-pgsql \
            php8.2-intl \
            php8.2-xml \
            php8.2-redis \
            php8.2-memcached \
            php-pear \
    && dpkg --compare-versions "$(dpkg-query -W -f='${Version}' php8.2-fpm)" ge 8.2.35 \
    && mkdir -p /run/php \
    && pip install --no-cache-dir --break-system-packages --root-user-action=ignore supervisor git+https://github.com/coderanger/supervisor-stdout \
    && echo "#!/bin/sh\nexit 0" > /usr/sbin/policy-rc.d \
    && rm -rf /etc/nginx/conf.d/default.conf \
    && sed -i -e "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g" ${php_conf} \
    && sed -i -e "s/memory_limit\s*=\s*.*/memory_limit = 256M/g" ${php_conf} \
    && sed -i -e "s/upload_max_filesize\s*=\s*2M/upload_max_filesize = 100M/g" ${php_conf} \
    && sed -i -e "s/post_max_size\s*=\s*8M/post_max_size = 100M/g" ${php_conf} \
    && sed -i -e "s/variables_order = \"GPCS\"/variables_order = \"EGPCS\"/g" ${php_conf} \
    && sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php/8.2/fpm/php-fpm.conf \
    && sed -i -e "s/;catch_workers_output\s*=\s*yes/catch_workers_output = yes/g" ${fpm_conf} \
    && sed -i -e "s/pm.max_children = 5/pm.max_children = 4/g" ${fpm_conf} \
    && sed -i -e "s/pm.start_servers = 2/pm.start_servers = 3/g" ${fpm_conf} \
    && sed -i -e "s/pm.min_spare_servers = 1/pm.min_spare_servers = 2/g" ${fpm_conf} \
    && sed -i -e "s/pm.max_spare_servers = 3/pm.max_spare_servers = 4/g" ${fpm_conf} \
    && sed -i -e "s/pm.max_requests = 500/pm.max_requests = 200/g" ${fpm_conf} \
    && sed -i -e "s/www-data/nginx/g" ${fpm_conf} \
    && sed -i -e "s/^;clear_env = no$/clear_env = no/" ${fpm_conf} \
    # Install Composer
    && curl -o /tmp/composer-setup.php https://getcomposer.org/installer \
    && curl -o /tmp/composer-setup.sig https://composer.github.io/installer.sig \
    && php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) !== trim(file_get_contents('/tmp/composer-setup.sig'))) { unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); }" \
    && php /tmp/composer-setup.php --no-ansi --install-dir=/usr/local/bin --filename=composer --version=${COMPOSER_VERSION} \
    && rm -rf /tmp/composer-setup.php \
    # Clean up
    && rm -rf /tmp/pear \
    && apt-get purge -y --auto-remove $buildDeps \
    && apt-get clean \
    && apt-get autoremove \
    && rm -rf /var/lib/apt/lists/*

# Supervisor config
COPY ./supervisord.conf /etc/supervisord.conf

# Override nginx's default config
COPY ./default.conf /etc/nginx/conf.d/default.conf

# Override default nginx welcome page
COPY html /usr/share/nginx/html

# Copy Scripts
COPY ./start.sh /start.sh

EXPOSE 80

CMD ["/start.sh"]

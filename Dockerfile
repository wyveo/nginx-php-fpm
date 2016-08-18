FROM debian:jessie

MAINTAINER Colin Wilson "colin@wyveo.com"

# Let the container know that there is no tty
ENV DEBIAN_FRONTEND noninteractive

ENV NGINX_VERSION 1.11.3-1~jessie

# Install Basic Requirements
RUN apt-get update && apt-get install -y wget curl nano zip unzip git

# Add sources for latest nginx and php
RUN apt-key adv --keyserver hkp://pgp.mit.edu:80 --recv-keys 573BFD6B3D8FBC641079A6ABABF5BD827BD9BF62 \
    && echo "deb http://nginx.org/packages/mainline/debian/ jessie nginx" >> /etc/apt/sources.list \
    && echo "deb http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list \
    && echo "deb-src http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list \
    && wget --no-check-certificate https://www.dotdeb.org/dotdeb.gpg \
    && apt-key add dotdeb.gpg \
    && apt-get update

# Install nginx
RUN apt-get install --no-install-recommends --no-install-suggests -y \
                        ca-certificates \
                        nginx=${NGINX_VERSION}

# Install PHP
RUN apt-get -y install php7.0-fpm php7.0-cli php7.0-dev php7.0-common \
    php7.0-json php7.0-opcache php7.0-readline php7.0-mbstring php7.0-curl \
    php7.0-imagick php7.0-mcrypt php7.0-mysql php7.0-xml php7.0-redis

# Clean up
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# forward request and error logs to docker log collector
RUN ln -sf /dev/stdout /var/log/nginx/access.log \
    && ln -sf /dev/stderr /var/log/nginx/error.log

EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]

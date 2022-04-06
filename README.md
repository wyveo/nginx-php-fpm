[![nginx 1.21.6](https://img.shields.io/badge/nginx-1.21.6-brightgreen.svg?&logo=nginx&logoColor=white&style=for-the-badge)](https://nginx.org/en/CHANGES) [![php 8.1.3](https://img.shields.io/badge/php--fpm-8.1.3-blue.svg?&logo=php&logoColor=white&style=for-the-badge)](https://secure.php.net/releases/8_1_3.php) [![License MIT](https://img.shields.io/badge/license-MIT-blue.svg?&style=for-the-badge)](https://github.com/wyveo/nginx-php-fpm/blob/master/LICENSE)

## This Fork

`Partavate-Studios/nginx-php-fpm` was forked from [`wyveo/nginx-php-fpm`](https://github.com/wyveo/nginx-php-fpm) on 2022.04.06.

This only adds the `php8.1-gmp` package, (GNU Multiple Precision) which is required for working with 256-bit EVM integers.

## Introduction
This is a Dockerfile to build a debian based container image running nginx and php-fpm 8.1.x / 8.0.x / 7.4.x / 7.3.x / 7.2.x / 7.1.x / 7.0.x & Composer.

### Versioning
| Docker Tag | GitHub Release | Nginx Version | PHP Version | Debian Version | Composer
|-----|-------|-----|--------|--------|------|
| latest | master Branch |1.21.6 | 8.1.3 | bullseye | 2.2.7 |
| php81 | php81 Branch |1.21.6 | 8.1.3 | bullseye | 2.2.7 |
| php80 | php80 Branch |1.21.6 | 8.0.16 | buster | 2.0.13 |
| php74 | php74 Branch |1.21.6 | 7.4.28 | buster | 2.0.13 |
| php73 | php73 Branch |1.21.6 | 7.3.33 | buster | 2.0.13 |
| php72 | php72 Branch |1.21.6 | 7.2.34 | buster | 2.0.13 |
| php71 | php71 Branch |1.21.6 | 7.1.33 | buster | 2.0.13 |
| php70 | php70 Branch |1.21.6 | 7.0.33 | buster | 2.0.13 |

## Building from source
To build from source you need to clone the git repo and run docker build:
```
$ git clone https://github.com/Partavate-Studios/nginx-php-fpm.git
$ cd nginx-php-fpm
```

followed by
```
$ docker build -t nginx-php-fpm:php81 -t registry.gitlab.com/partavate/infrastructure/nginx-php-fpm:php81 . . # PHP 8.1.x
$ docker push registry.gitlab.com/partavate/infrastructure/nginx-php-fpm:php81
```


## Pulling from GitLab Registry
```
$ docker login registry.gitlab.com
$ docker pull registry.gitlab.com/partavate/infrastructure/nginx-php-fpm:php81
```

## Running
To run the container:
```
$ sudo docker run -d registry.gitlab.com/partavate/infrastructure/nginx-php-fpm:php81
```

Default web root:
```
/usr/share/nginx/html
```

Note that applications using this image should configure Nginx to use the standard web root of `/var/www/public`.

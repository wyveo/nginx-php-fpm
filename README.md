[![Docker Hub; wyveo/nginx-php-fpm](https://img.shields.io/badge/docker%20hub-wyveo%2Fnginx--php--fpm-blue.svg?&logo=docker&style=for-the-badge)](https://hub.docker.com/r/wyveo/nginx-php-fpm/) [![](https://badges.weareopensource.me/docker/pulls/wyveo/nginx-php-fpm?style=for-the-badge)](https://hub.docker.com/r/wyveo/nginx-php-fpm/) [![](https://img.shields.io/docker/image-size/wyveo/nginx-php-fpm/latest?style=for-the-badge)](https://hub.docker.com/r/wyveo/nginx-php-fpm/) [![nginx 1.23.1](https://img.shields.io/badge/nginx-1.23.1-brightgreen.svg?&logo=nginx&logoColor=white&style=for-the-badge)](https://nginx.org/en/CHANGES) [![php 8.1.9](https://img.shields.io/badge/php--fpm-8.1.9-blue.svg?&logo=php&logoColor=white&style=for-the-badge)](https://secure.php.net/releases/8_1_9.php) [![License MIT](https://img.shields.io/badge/license-MIT-blue.svg?&style=for-the-badge)](https://github.com/wyveo/nginx-php-fpm/blob/master/LICENSE)

## Introduction
This is a Dockerfile to build a debian based container image running nginx and php-fpm 8.1.x / 8.0.x / 7.4.x / 7.3.x / 7.2.x / 7.1.x / 7.0.x & Composer.

### Versioning
| Docker Tag | GitHub Release | Nginx Version | PHP Version | Debian Version | Composer
|-----|-------|-----|--------|--------|------|
| latest | master Branch |1.23.1 | 8.1.13 | bullseye | 2.4.4 |
| php81 | php81 Branch |1.21.6 | 8.1.3 | bullseye | 2.2.7 |
| php74 | php74 Branch |1.21.6 | 7.4.28 | buster | 2.0.13 |


## Building from source
To build from source you need to clone the git repo and run docker build:
```
$ git clone https://github.com/LordMrcS/nginx-php-fpm.git
$ cd nginx-php-fpm
```

followed by
```
$ docker build -t nginx-php-fpm:php81 . # PHP 8.1.x
```


## Pulling from Docker Hub
```
$ docker pull ghcr.io/lordmrcs/nginx-php-fpm:master
```

## Running
To run the container:
```
$ sudo docker run -d ghcr.io/lordmrcs/nginx-php-fpm:master
```

Default web root:
```
/usr/share/nginx/html
```

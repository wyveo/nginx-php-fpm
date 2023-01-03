[![nginx 1.23.3](https://img.shields.io/badge/nginx-1.23.3-brightgreen.svg?&logo=nginx&logoColor=white&style=for-the-badge)](https://nginx.org/en/CHANGES) 
[![php 8.2.0](https://img.shields.io/badge/php--fpm-8.2.0-blue.svg?&logo=php&logoColor=white&style=for-the-badge)](https://secure.php.net/releases/8_2_0.php)
[![License MIT](https://img.shields.io/badge/license-MIT-blue.svg?&style=for-the-badge)](https://github.com/LordMrcS/nginx-php-fpm/blob/master/LICENSE)

## Introduction
This is a Dockerfile to build a debian based container image running nginx and php-fpm 8.2.x / 8.1.x / 7.4.x & Composer.

### Versioning
| Docker Tag | GitHub Release | Nginx Version | PHP Version | Debian Version | Composer
|-----|-------|-----|--------|--------|------|
| latest | master Branch | 1.23.3 | 8.2.0 | bullseye | 2.5.1 |
| php81 | php81 Branch | 1.23.1 | 8.1.13 | bullseye | 2.4.4 |
| php74 | php74 Branch | 1.21.6 | 7.4.28 | buster | 2.0.13 |


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
$ docker pull mrcs2000/nginx-php-fpm-ldap
```

## Pulling from Github Container Registry
```
$ docker pull ghcr.io/lordmrcs/nginx-php-fpm:master
```

## Running
To run via CLI the container from Github:
```
$ sudo docker run -d ghcr.io/lordmrcs/nginx-php-fpm:master
```

Default web root:
```
/usr/share/nginx/html
```
## Running via docker-compose stack file
This example mounts the default nginx HTML path to /var/www, overrides nginx and PHP default confs and exposes port 80.
```
version: '3'
services:
  web:
    image: ghcr.io/lordmrcs/nginx-php-fpm:master
    volumes:
      - ./www/:/usr/share/nginx/html/
      - ./default.conf:/etc/nginx/conf.d/default.conf
      - ./php.ini:/etc/php/8.2/fpm/php.ini
    ports:
      - 80:80
```

---
Forked from [wyveo/nginx-php-fpm](https://github.com/wyveo/nginx-php-fpm)

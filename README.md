[![Docker Hub; wyveo/nginx-php-fpm](https://img.shields.io/badge/docker%20hub-wyveo%2Fnginx--php--fpm-blue.svg?&logo=docker&style=for-the-badge)](https://hub.docker.com/r/wyveo/nginx-php-fpm/) [![](https://badges.weareopensource.me/docker/pulls/wyveo/nginx-php-fpm?style=for-the-badge)](https://hub.docker.com/r/wyveo/nginx-php-fpm/) [![](https://img.shields.io/docker/image-size/wyveo/nginx-php-fpm/php80?style=for-the-badge)](https://hub.docker.com/r/wyveo/nginx-php-fpm/) [![nginx 1.19.10](https://img.shields.io/badge/nginx-1.19.10-brightgreen.svg?&logo=nginx&logoColor=white&style=for-the-badge)](https://nginx.org/en/CHANGES) [![php 8.0.5](https://img.shields.io/badge/php--fpm-8.0.5-blue.svg?&logo=php&logoColor=white&style=for-the-badge)](https://secure.php.net/releases/8_0_5.php) [![License MIT](https://img.shields.io/badge/license-MIT-blue.svg?&style=for-the-badge)](https://github.com/wyveo/nginx-php-fpm/blob/master/LICENSE)

## Introduction
This is a Dockerfile to build a debian based container image running nginx and php-fpm 8.0.x / 7.4.x / 7.3.x / 7.2.x / 7.1.x / 7.0.x & Composer.

### Versioning
| Docker Tag | GitHub Release | Nginx Version | PHP Version | Debian Version | Composer
|-----|-------|-----|--------|--------|------|
| latest | master Branch |1.19.10 | 8.0.5 | buster | 2.0.13 |
| php80 | php80 Branch |1.19.10 | 8.0.5 | buster | 2.0.13 |
| php74 | php74 Branch |1.19.10 | 7.4.18 | buster | 1.10.22 |
| php73 | php73 Branch |1.19.10 | 7.3.28 | buster | 1.10.22 |
| php72 | php72 Branch |1.19.10 | 7.2.34 | buster | 1.10.22 |
| php71 | php71 Branch |1.19.10 | 7.1.33 | buster | 1.10.22 |
| php70 | php70 Branch |1.19.10 | 7.0.33 | buster | 1.10.22 |

## Building from source
To build from source you need to clone the git repo and run docker build:
```
$ git clone https://github.com/wyveo/nginx-php-fpm.git
$ cd nginx-php-fpm
```

followed by
```
$ docker build -t nginx-php-fpm:php80 . # PHP 8.0.x
```


## Pulling from Docker Hub
```
$ docker pull wyveo/nginx-php-fpm:php80
```

## Running
To run the container:
```
$ sudo docker run -d wyveo/nginx-php-fpm:php80
```

Default web root:
```
/usr/share/nginx/html
```

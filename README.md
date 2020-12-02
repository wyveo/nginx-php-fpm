[![Docker Hub; wyveo/nginx-php-fpm](https://img.shields.io/badge/docker%20hub-wyveo%2Fnginx--php--fpm-blue.svg?&logo=docker&style=for-the-badge)](https://hub.docker.com/r/wyveo/nginx-php-fpm/) [![](https://badges.weareopensource.me/docker/pulls/wyveo/nginx-php-fpm?style=for-the-badge)](https://hub.docker.com/r/wyveo/nginx-php-fpm/) [![](https://badges.weareopensource.me/docker/image-size/wyveo/nginx-php-fpm/php70?style=for-the-badge)](https://microbadger.com/images/wyveo/nginx-php-fpm) [![](https://img.shields.io/microbadger/layers/wyveo/nginx-php-fpm/php73.svg?&style=for-the-badge)](https://microbadger.com/images/wyveo/nginx-php-fpm) [![nginx 1.19.5](https://img.shields.io/badge/nginx-1.19.5-brightgreen.svg?&logo=nginx&logoColor=white&style=for-the-badge)](https://nginx.org/en/CHANGES) [![php 7.4.13](https://img.shields.io/badge/php--fpm-7.4.13-blue.svg?&logo=php&logoColor=white&style=for-the-badge)](https://secure.php.net/releases/7_4_13.php) [![License MIT](https://img.shields.io/badge/license-MIT-blue.svg?&style=for-the-badge)](https://github.com/wyveo/nginx-php-fpm/blob/master/LICENSE)

## Introduction
This is a Dockerfile to build a debian based container image running nginx and php-fpm 8.0.x / 7.4.x / 7.3.x / 7.2.x / 7.1.x / 7.0.x & Composer.

### Versioning
| Docker Tag | GitHub Release | Nginx Version | PHP Version | Debian Version | Composer
|-----|-------|-----|--------|--------|------|
| latest | master Branch |1.19.5 | 8.0.0 | buster | 2.0.7 |
| php80 | php74 Branch |1.19.5 | 8.0.0 | buster | 1.10.17 |
| php74 | php74 Branch |1.19.5 | 7.4.13 | buster | 1.10.17 |
| php73 | php73 Branch |1.19.5 | 7.3.25 | buster | 1.10.17 |
| php72 | php72 Branch |1.19.5 | 7.2.34 | buster | 1.10.17 |
| php71 | php71 Branch |1.19.5 | 7.1.33 | buster | 1.10.17 |
| php70 | php70 Branch |1.19.5 | 7.0.33 | buster | 1.10.17 |

## Building from source
To build from source you need to clone the git repo and run docker build:
```
$ git clone https://github.com/wyveo/nginx-php-fpm.git
$ cd nginx-php-fpm
```

followed by
```
$ docker build -t nginx-php-fpm:php73 . # PHP 7.3.x
```


## Pulling from Docker Hub
```
$ docker pull wyveo/nginx-php-fpm:php73
```

## Running
To run the container:
```
$ sudo docker run -d wyveo/nginx-php-fpm:php73
```

Default web root:
```
/usr/share/nginx/html
```

[![Docker Hub; wyveo/nginx-php-fpm](https://img.shields.io/badge/docker%20hub-wyveo%2Fnginx--php--fpm-blue.svg)](https://hub.docker.com/r/wyveo/nginx-php-fpm/) [![](https://images.microbadger.com/badges/image/wyveo/nginx-php-fpm.svg)](http://microbadger.com/images/wyveo/nginx-php-fpm "Get your own image badge on microbadger.com") ![nginx 1.11.4](https://img.shields.io/badge/nginx-1.11.4-brightgreen.svg) ![php 7.0.10](https://img.shields.io/badge/php--fpm-7.0.10-blue.svg) ![License MIT](https://img.shields.io/badge/license-MIT-blue.svg)
## Introduction
This is a Dockerfile to build a container image running nginx and php-fpm 7.
## Building from source
To build from source you need to clone the git repo and run docker build:
```
$ git clone https://github.com/wyveo/nginx-php-fpm.git
$ docker build -t nginx-php-fpm:latest .
```

## Pulling from Docker Hub
```
$ docker pull wyveo/nginx-php-fpm
```

## Running
To run the container:
```
$ sudo docker run -d wyveo/nginx-php-fpm
```

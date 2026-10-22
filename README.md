[![Docker Hub; seanmollet/nginx-php-fpm](https://img.shields.io/badge/docker%20hub-seanmollet%2Fnginx--php--fpm-blue.svg?&logo=docker&style=for-the-badge)](https://hub.docker.com/r/seanmollet/nginx-php-fpm/) [![php 8.2.35](https://img.shields.io/badge/php--fpm-8.2.35-blue.svg?&logo=php&logoColor=white&style=for-the-badge)](https://www.php.net/ChangeLog-8.php#8.2.35) [![License MIT](https://img.shields.io/badge/license-MIT-blue.svg?&style=for-the-badge)](https://github.com/SeanMollet/nginx-php-fpm/blob/master/LICENSE)

> [!IMPORTANT]
> **This is an unofficial, community-maintained successor to [`wyveo/nginx-php-fpm`](https://hub.docker.com/r/wyveo/nginx-php-fpm/), published in response to the php2shell CVEs.**
>
> `wyveo/nginx-php-fpm` has not been updated since September 2023 and still ships PHP 8.2.9 on Debian bullseye (now end of life). On 21 October 2026 PHP fixed two critical unauthenticated remote code execution flaws, "php2shell" ([CVE-2026-109618 and CVE-2026-109619](https://www.cisa.gov/news-events/alerts/2026/10/21/critical-vulnerabilities-php-require-immediate-patching), CVSS 9.2), that affect every PHP install serving web requests. This image ships the patched **PHP 8.2.35**.
>
> It is a drop-in replacement: same PHP 8.2, same extensions, same config, paths and web root. Swap the image name and redeploy:
>
> ```
> wyveo/nginx-php-fpm:latest  ->  seanmollet/nginx-php-fpm:latest
> wyveo/nginx-php-fpm:php82   ->  seanmollet/nginx-php-fpm:php82
> ```

## Introduction
This is a Dockerfile to build a debian based container image running nginx and php-fpm 8.2.x & Composer.

### Versioning
| Docker Tag      | GitHub Release | Nginx Version     | PHP Version | Debian Version | Composer |
|-----------------|----------------|-------------------|-------------|----------------|----------|
| latest          | master Branch  | mainline (1.31.8) | 8.2.35      | trixie         | 2.10.3   |
| php82           | master Branch  | mainline (1.31.8) | 8.2.35      | trixie         | 2.10.3   |
| 8.2.35          | master Branch  | mainline (1.31.8) | 8.2.35      | trixie         | 2.10.3   |

Only PHP 8.2 is published. Note that PHP 8.2 itself reaches end of security support on 31 December 2026.

## Building from source
To build from source you need to clone the git repo and run docker build:
```
$ git clone https://github.com/SeanMollet/nginx-php-fpm.git
$ cd nginx-php-fpm
```

followed by
```
$ docker build -t nginx-php-fpm:php82 . # PHP 8.2.x
```


## Pulling from Docker Hub
```
$ docker pull seanmollet/nginx-php-fpm:php82
```

## Running
To run the container:
```
$ sudo docker run -d seanmollet/nginx-php-fpm:php82
```

Default web root:
```
/usr/share/nginx/html
```

## Credits
Originally created by Colin Wilson ([wyveo/nginx-php-fpm](https://github.com/wyveo/nginx-php-fpm)), MIT licensed.

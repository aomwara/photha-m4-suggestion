FROM php:5-fpm-alpine

ADD ./php/www.conf /usr/local/etc/php-fpm.d/www.conf
ADD ./php/php.ini /usr/local/etc/php/php.ini

RUN addgroup -g 1000 photha && adduser -G photha -g photha -s /bin/sh -D photha

RUN mkdir -p /var/www/html

RUN chown photha:photha /var/www/html

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql mysql && docker-php-ext-enable mysql

FROM php:5-fpm-alpine

ADD ./php/www.conf /usr/local/etc/php-fpm.d/www.conf
ADD ./php/php.ini /usr/local/etc/php/php.ini

RUN addgroup -g 1000 smos && adduser -G smos -g smos -s /bin/sh -D smos

RUN mkdir -p /var/www/html

RUN chown smos:smos /var/www/html

WORKDIR /var/www/html

RUN docker-php-ext-install mysql && docker-php-ext-enable mysql

FROM php:7.2-fpm-alpine

RUN apk add \
			--virtual .extra-deps --no-cache \
			autoconf g++ make \
			&& docker-php-ext-install pdo pdo_mysql
RUN apk add \
			--no-cache \
			php7-json \
            php7-opcache \
			&& pecl install -o -f redis \
			&& rm -rf /tmp/pear \
			&& docker-php-ext-enable redis \
			&& apk del .extra-deps

WORKDIR /var/www
RUN rm -rf /var/www/html

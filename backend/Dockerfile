# syntax=docker/dockerfile:1

FROM composer:lts as deps
COPY . /app/
RUN composer install --prefer-dist --no-dev --optimize-autoloader --no-interaction


FROM php:8.2-apache as final
RUN docker-php-ext-install pdo pdo_pgsql
RUN a2enmod rewrite
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY --from=deps app/vendor/ /var/www/html/vendor
COPY ./src /var/www/html
USER www-data
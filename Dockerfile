FROM php:8.1-fpm-alpine
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN docker-php-ext-install pdo_mysql
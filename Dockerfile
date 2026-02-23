FROM php:8.3-cli-alpine AS cli

COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

WORKDIR /opt/apps/app

COPY composer.json composer.lock ./

RUN composer install --no-scripts --no-autoloader --prefer-dist

COPY . .

RUN composer install --prefer-dist

FROM oven/bun:1.3 AS bun

WORKDIR /opt/apps/app

COPY . .

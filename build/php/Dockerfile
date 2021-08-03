# syntax=docker/dockerfile:1

FROM php:7.4-fpm
ARG ENV=production

RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    wget \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng-dev zlib1g-dev libicu-dev g++ libmagickwand-dev libxml2-dev libzip-dev

RUN mv /usr/local/etc/php/php.ini-${ENV} /usr/local/etc/php/php.ini

RUN docker-php-ext-install zip

RUN test "${ENV}" = "development" \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    || true

WORKDIR /app/src
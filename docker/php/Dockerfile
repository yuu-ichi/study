FROM php:8.2-apache

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt update \
  && apt install -y vim unzip \
  && docker-php-ext-install pdo_mysql \
  && apt install -y libicu-dev \
  && docker-php-ext-install intl \
  && a2enmod rewrite

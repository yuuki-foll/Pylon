FROM php:8.0-apache

RUN apt update \
  && apt install -y \
  g++ \
  libicu-dev \
  libpq-dev \
  libzip-dev \
  zip \
  zlib1g-dev 

RUN docker-php-ext-install \
  intl \
  opcache \
  pdo \
  pdo_pgsql \
  pgsql 
WORKDIR /var/www/laravel_docker

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs
RUN npm install npm@latest -g

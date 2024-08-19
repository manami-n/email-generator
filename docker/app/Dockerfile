FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y --no-install-recommends curl zip unzip git libpq-dev libmagickwand-dev libgmp-dev

RUN pecl install xdebug
RUN pecl install imagick
RUN pecl install apcu
RUN docker-php-ext-install opcache
RUN docker-php-ext-install pdo_pgsql
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install intl
RUN docker-php-ext-install gmp
RUN docker-php-ext-enable apcu sodium imagick

RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
RUN apt-get autoremove

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer && chmod +sx /usr/local/bin/composer

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www
RUN chown -R www:www . /var/www

USER www

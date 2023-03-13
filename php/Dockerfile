FROM php:5.4-fpm

RUN apt-get update \
  && docker-php-ext-install pdo_mysql\
  && pecl install xdebug-2.4.1 \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*
  
RUN docker-php-ext-enable xdebug\
  && echo "xdebug.remote_autostart = 1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.remote_connect_back = 0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.remote_enable = 1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.remote_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.remote_port = 9004" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

COPY php.ini /usr/local/etc/php/php.ini

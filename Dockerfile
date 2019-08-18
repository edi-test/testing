FROM php:7.2-fpm
RUN pecl install redis-4.0.1 \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable redis mysqli \
    && apt-get autoremove -qqy && apt-get autoclean -qq \
    && rm -rf /var/lib/apt/lists/*

FROM php:apache
MAINTAINER Mike van Riel<mike@phpdoc.org>

RUN apt-get update \
    && apt-get install -yq git libicu-dev libicu52 libcurl4-gnutls-dev libgmp3-dev libgmp-dev php5-mysql zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/ \
    && docker-php-ext-install -j$(nproc) zip intl gmp curl sockets bcmath pdo_mysql \
    && a2enmod rewrite \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

WORKDIR /opt/webapp

COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY . /opt/webapp

RUN cd /opt/webapp \
    && mkdir /tmp/cache /tmp/logs \
    && chmod -R 777 /opt/webapp/var/* \
    && chown -R www-data:www-data /tmp/cache /tmp/logs \
    && composer install --no-dev -o \
    && rm /usr/local/bin/composer \
    && rm -rf ~/.composer \
    && chown -R www-data:www-data /opt/webapp

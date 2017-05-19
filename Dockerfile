FROM php:apache
MAINTAINER Mike van Riel<mike@phpdoc.org>

RUN apt-get update \
    && apt-get install -yq libicu-dev libicu52 libcurl4-gnutls-dev libgmp3-dev libgmp-dev php5-mysql \
    && ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/ \
    && docker-php-ext-install -j$(nproc) intl gmp curl sockets bcmath pdo_mysql \
    && a2enmod rewrite \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

WORKDIR /opt/webapp

ADD docker/vhost.conf /etc/apache2/sites-available/000-default.conf
ADD . /opt/webapp

RUN cd /opt/webapp \
    && composer install \
    && rm /usr/local/bin/composer

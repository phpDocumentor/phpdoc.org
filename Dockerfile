FROM php:apache
MAINTAINER Mike van Riel<mike@phpdoc.org>

RUN apt-get update \
    && apt-get install -yq libicu-dev libicu52 libcurl4-gnutls-dev libgmp3-dev libgmp-dev \
    && ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/ \
    && docker-php-ext-install -j$(nproc) intl gmp curl sockets bcmath \
    && a2enmod rewrite

WORKDIR /opt/webapp

ADD docker/vhost.conf /etc/apache2/sites-available/000-default.conf
ADD . /opt/webapp

RUN mkdir -p /opt/webapp/var/cache \
  && mkdir -p /opt/webapp/var/log \
  && chown -R www-data:www-data /opt/webapp

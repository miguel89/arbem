FROM ubuntu:latest

USER root
ENV DEBIAN_FRONTEND noninteractive
COPY . /code

WORKDIR /code

RUN apt-get update && apt-get install -y software-properties-common

RUN add-apt-repository -y ppa:ondrej/php
RUN apt-get update && \
    apt-get install -yq \
        vim git zip unzip curl php5.6 php5.6-mbstring php5.6-mcrypt php5.6-xml \
        php5.6-curl php5.6-bcmath php5.6-pgsql php5.6-intl
RUN apt-get install -y libpq-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --profile -vvv

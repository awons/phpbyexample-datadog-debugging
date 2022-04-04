FROM php:8.1-cli

ARG DATADOG_TRACER_VERSION=${DATADOG_TRACER_VERSION:-0.71.0}

RUN apt update && apt install -y git unzip

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN curl -o /tmp/datadog-php-tracer.deb -L https://github.com/DataDog/dd-trace-php/releases/download/${DATADOG_TRACER_VERSION}/datadog-php-tracer_${DATADOG_TRACER_VERSION}_amd64.deb \
    && dpkg -i /tmp/datadog-php-tracer.deb \
    && rm /tmp/datadog-php-tracer.deb

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /application

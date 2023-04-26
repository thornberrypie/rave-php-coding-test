FROM php:8.2-apache

# Install dependencies
RUN apt-get update && \
    apt-get install --yes unzip && \
    rm -r /var/lib/apt/lists/* && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /var/www/html
USER 1000:1000

ENTRYPOINT [ "./entrypoint.sh" ]

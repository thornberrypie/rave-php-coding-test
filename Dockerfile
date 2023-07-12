FROM php:8.2-apache
WORKDIR /var/www/html

RUN \
    # Install Composer and its dependencies
    apt-get update && \
    apt-get install --yes --no-install-recommends unzip && \
    rm -r /var/lib/apt/lists/* && \
    curl --silent https://raw.githubusercontent.com/composer/getcomposer.org/70527179915d55b3811bebaec55926afd331091b/web/installer | php -- --2 --quiet && \
    mv composer.phar /usr/local/bin/composer && \
    # Change UID and GID of Apache to Docker user UID/GID
    # This prevents file ownership issues, mostly during local development
    usermod -u 1000 www-data && groupmod -g 1000 www-data

# Run as the unpriviledged www-data user
USER www-data:www-data

ENTRYPOINT [""]

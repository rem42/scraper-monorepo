FROM php:8.4-cli-alpine

# Installation des dépendances système pour les scrapers (dom, curl, zip)
RUN apk add --no-cache \
    git \
    unzip \
    libzip-dev \
    libxml2-dev \
    icu-dev \
    && docker-php-ext-install \
    zip \
    intl \
    dom \
    xml

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# On crée un utilisateur non-root pour éviter les problèmes de permissions
RUN adduser -D -u 1000 developer
USER developer

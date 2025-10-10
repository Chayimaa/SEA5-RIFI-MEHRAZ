FROM php:8.2-apache

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libsqlite3-dev zip unzip curl git \
    && docker-php-ext-install pdo pdo_sqlite

# Activer mod_rewrite pour Laravel
RUN a2enmod rewrite

# Copier les fichiers du projet
COPY --chown=www-data:www-data . /var/www/html

# Définir le répertoire de travail
WORKDIR /var/www/html

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Donner les bons droits aux dossiers Laravel
RUN chmod -R 755 storage
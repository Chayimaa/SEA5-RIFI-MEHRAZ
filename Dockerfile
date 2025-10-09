FROM php:8.2-apache

# Installer les dépendances
RUN apt-get update && apt-get install -y \
    libsqlite3-dev zip unzip curl git \
    && docker-php-ext-install pdo pdo_sqlite

# Activer mod_rewrite
RUN a2enmod rewrite

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier les fichiers du projet
COPY --chown=www-data:www-data . /var/www/html
WORKDIR /var/www/html

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Générer la clé Laravel
RUN php artisan key:generate --no-interaction || true

# Permissions pour Laravel (storage, bootstrap/cache, database)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod 664 /var/www/html/database/database.sqlite || true

# CRITICAL: Configurer Apache pour pointer vers /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i 's|AllowOverride None|AllowOverride All|g' /etc/apache2/apache2.conf

EXPOSE 80
#!/bin/bash
set -e

# S'assurer que le bon dossier est utilisé (attention à la casse)
cd /var/www/html

# Installer les dépendances si le dossier vendor n'existe pas
if [ ! -d vendor ]; then
    composer install --no-interaction --prefer-dist --optimize-autoloader
fi

# Générer la clé Laravel si elle n'existe pas
if ! grep -q "^APP_KEY=" .env 2>/dev/null || grep -q "^APP_KEY=$" .env; then
    php artisan key:generate --force
fi

# Lancer les migrations
php artisan migrate --force

# Lancer Apache en mode foreground
exec "$@"

#!/usr/bin/env bash
set -e

echo "Running container init script..."

php /var/www/artisan key:generate

if [ ! -f "/var/www/database/data/database.sqlite" ]; then
    echo "Creating SQLite database..."
    mkdir "/var/www/database/data"
    touch "/var/www/database/data/database.sqlite"
fi

echo "Run composer install"
composer install
echo "Finished composer install"

echo "Build assets"
npm run build
echo "Finished building assets"

echo "Init script done. Starting PHP-FPM..."

# Hand off to the CMD
exec "$@"
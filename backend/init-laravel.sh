#!/bin/bash

# Create Laravel project if composer.json doesn't exist
if [ ! -f "composer.json" ]; then
    echo "Creating new Laravel project..."
    composer create-project laravel/laravel temp --prefer-dist
    mv temp/* .
    mv temp/.[^.]* . 2>/dev/null || true
    rm -rf temp
fi

# Copy .env.example to .env if it doesn't exist
if [ ! -f ".env" ]; then
    cp .env.example .env
fi

# Update database configuration in .env
sed -i 's/DB_HOST=.*/DB_HOST=ecis-mysql/' .env
sed -i 's/DB_DATABASE=.*/DB_DATABASE=ecis_solutions/' .env
sed -i 's/DB_USERNAME=.*/DB_USERNAME=ecis_user/' .env
sed -i 's/DB_PASSWORD=.*/DB_PASSWORD=securepassword123/' .env

# Install dependencies
composer install

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate --force

echo "Laravel initialization complete!"

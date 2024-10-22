#!/bin/bash

set -e


git pull

php8.2 artisan down

php8.2 composer install --no-dev --optimize-autoloader

php8.2 artisan migrate

php8.2 artisan config:cache

php8.2 artisan event:cache

php8.2 artisan route:cache

php8.2 artisan view:cache

php8.2 artisan up
#!/bin/bash

=======
(php artisan down --render="errors.updating") || true
cd /home/www/central
git stash
git checkout main
git pull --all
composer install --no-interaction --prefer-dist --optimize-autoloader
php artisan migrate
php artisan optimize

php artisan up

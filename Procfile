web: vendor/bin/heroku-php-apache2 public/
release: php artisan optimize && chmod -R 775 storage/ && chmod -R 775 public/ && php artisan migrate:fresh --seed --force
# ================================>>Please use my image<<======================================]
# Set version
ARG APP_VERSION=8.1-fpm

FROM sovichea10/laravel-app-php:${APP_VERSION}

# Copy directory
COPY . /var/www/laravel10

WORKDIR /var/www/laravel10

RUN rm -f composer.lock

# Install PHP Composer
RUN COMPOSER_MEMORY_LIMIT=-1 composer install
RUN cp .env.example .env

RUN php artisan key:generate

RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www/laravel10/storage

CMD php artisan --host=0.0.0.0 serve


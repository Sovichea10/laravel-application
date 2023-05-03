# ================================>>Please use my image<<======================================]

# Set version
ARG APP_VERSION=v1.0

FROM sovichea10/php8.1-ubuntu:${APP_VERSION}

# Copy directory
COPY . /var/www

WORKDIR /var/www

RUN rm -f composer.lock

RUN COMPOSER_MEMORY_LIMIT=-1 composer install
RUN cp .env.example .env

RUN php artisan key:generate

CMD php artisan --host=0.0.0.0 serve



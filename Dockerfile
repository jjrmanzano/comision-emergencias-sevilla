FROM php:fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .
RUN composer install --optimize-autoloader --no-dev
RUN php ./vendor/bin/artisan config:cache
RUN php ./vendor/bin/artisan route:cache
RUN php ./vendor/bin/artisan view:cache
RUN php ./vendor/bin/artisan migrate

EXPOSE 8000

ENTRYPOINT ["php"]
CMD ["artisan", "serve", "--port=8000"]
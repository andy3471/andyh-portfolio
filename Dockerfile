FROM composer:1.9.3 as build
WORKDIR /app
COPY . /app
COPY .env.example /app/.env
RUN composer install

FROM php:7.3-apache
EXPOSE 80
COPY --from=build /app /app
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /app \
    && a2enmod rewrite
WORKDIR /app
RUN touch ./database/database.sqlite
RUN php artisan migrate
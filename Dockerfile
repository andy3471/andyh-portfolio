FROM composer:1.9.3 as build
WORKDIR /app
COPY . /app
RUN composer install --optimize-autoloader --no-dev

FROM php:7.3-apache
EXPOSE 80
COPY --from=build /app /app
COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/start.sh /usr/local/bin/start.sh
WORKDIR /app

RUN chown -R www-data:www-data /app \
    && docker-php-ext-install pdo pdo_mysql \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && a2enmod rewrite \
    && chmod u+x /usr/local/bin/start.sh \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && cp /app/.env.example /app/.env \
    && touch /app/database/database.sqlite \
    && php artisan migrate --force \
    && php artisan storage:link

CMD ["/usr/local/bin/start.sh"]
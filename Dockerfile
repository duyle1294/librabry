FROM php:7.2-apache
USER www-data
COPY --chown=www-data:www-data . /var/www/html/
RUN chmod -R 777 /var/www/html
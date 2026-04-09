FROM php:8.2-apache

COPY . /var/www/html/

RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN echo '<Directory /var/www/html/>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/custom.conf \
    && a2enconf custom
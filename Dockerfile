FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

# فعال‌سازی rewrite
RUN a2enmod rewrite

WORKDIR /var/www/html
EXPOSE 80

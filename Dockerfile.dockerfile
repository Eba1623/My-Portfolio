# Use PHP with Apache
FROM php:8.2-apache

# Copy everything into the web server root
COPY . /var/www/html/

# Enable mod_rewrite (optional for clean URLs)
RUN a2enmod rewrite

# Expose port 80 (used by Apache)
EXPOSE 80

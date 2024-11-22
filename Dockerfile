# Use the official PHP 8.2 image with Apache
FROM php:8.2-apache

# Enable required Apache modules
RUN a2enmod rewrite

# Copy your PHP application into the Docker container
COPY . /var/www/html/

# Set correct file permissions for Apache
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 in the container
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]

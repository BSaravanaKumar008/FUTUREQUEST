# Use an official PHP image as the base image
FROM php:7.4-apache

# Copy the website files to the Apache document root
COPY . /var/www/html/

# Expose port 8888 to the outside world
EXPOSE 7000

# Start Apache server
CMD ["apache2-foreground"]

FROM php:8.1-fpm

# Install the mysqli extension
RUN docker-php-ext-install mysqli

# Set the working directory
WORKDIR /var/www/html

# Copy your application code (including index.php)
COPY . /var/www/html

# Expose port 80 (if your nginx use it)
EXPOSE 80

# Command to run when the container starts
CMD ["php-fpm"]
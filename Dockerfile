FROM php:8.1-fpm

# Install any required extensions
RUN docker-php-ext-install pdo pdo_mysql # Example: installing pdo and pdo_mysql
# ... other extensions
FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
  git curl libpq-dev unzip libzip-dev zip libpng-dev libonig-dev libxml2-dev \
  && docker-php-ext-install pdo pdo_pgsql zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project
COPY . .

# Permissions
RUN chown -R www-data:www-data /var/www

#EXPOSE 9000
#CMD ["php-fpm"]

EXPOSE 8000

# Serve Laravel on port 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
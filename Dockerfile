FROM dunglas/frankenphp:1-php8.4

WORKDIR /app

# extensiones necesarias
RUN install-php-extensions \
    pdo_pgsql \
    gd \
    intl \
    zip \
    opcache \
    bcmath \
    exif \
    redis

# copiar composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# copiar proyecto
COPY . .

# instalar dependencias
RUN composer install

# permisos
RUN chown -R www-data:www-data storage bootstrap/cache

ENV SERVER_NAME=":80"
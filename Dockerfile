FROM php:8.2-fpm-alpine

# Instalação das dependências
RUN apk update && apk add --no-cache \
    build-base \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    zip \
    jpegoptim \
    optipng \
    pngquant \
    gifsicle \
    vim \
    unzip \
    git \
    curl \
    oniguruma-dev \
    libxml2-dev \
    mariadb-dev \
    libzip-dev \
    bash

# Instalação das extensões PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Definindo o diretório de trabalho
WORKDIR /var/www

# Copiando o composer para o contêiner
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiando os arquivos do projeto para o contêiner
COPY . /var/www

# Copiando wait-for-it.sh e definindo permissões de execução
COPY wait-for-it.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/wait-for-it.sh

# Instalando as dependências do projeto
RUN composer install

# Permissões para o storage e cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expondo a porta para o PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]

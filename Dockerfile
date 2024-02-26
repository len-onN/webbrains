# Use a imagem oficial do PHP 7.3-fpm
FROM php:8.0-fpm

# Instale as dependências necessárias
RUN apt-get update \
    && apt-get install -y \
        libpq-dev \
        libzip-dev

# Instalação da extensão pdo_mysql e zip
RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install zip

# Define o diretório de trabalho para a aplicação
WORKDIR /www

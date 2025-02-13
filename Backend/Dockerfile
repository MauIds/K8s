# Utiliza una imagen base de PHP con Apache
FROM php:8.0-apache

# Copia los archivos del backend al directorio de Apache
COPY . /var/www/html

# Instala las extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli

# Exponer el puerto 80
EXPOSE 80
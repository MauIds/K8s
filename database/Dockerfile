# Utiliza una imagen base de MySQL
FROM mysql:8.0

# Copia el script de inicialización al directorio de inicialización de MySQL
COPY init.sql /docker-entrypoint-initdb.d/

# Establece las variables de entorno para la base de datos
ENV MYSQL_DATABASE=Minikube
ENV MYSQL_USER=usuario_lectura
ENV MYSQL_PASSWORD=12345
ENV MYSQL_ROOT_PASSWORD=root

# Exponer el puerto 3306
EXPOSE 3306
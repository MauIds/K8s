CREATE DATABASE IF NOT EXISTS Minikube;

USE Minikube;

CREATE TABLE IF NOT EXISTS usuarios_pagina (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);

CREATE USER 'usuario_lectura'@'%' IDENTIFIED BY '12345';

-- Otorgar permisos de solo lectura en la base de datos específica
GRANT SELECT ON Minikube.* TO 'usuario_lectura'@'%';

-- Aplicar los cambios
FLUSH PRIVILEGES;
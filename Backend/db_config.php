<?php
    define ("servidor", "localhost");
    define ("basededatos", "Minikube");
    define ("usuario", "usuario_lectura");
    define ("password", "12345");

    function conectar(){
        if (!($conexion = mysqli_connect(servidor, usuario, password, basededatos))){
            echo "Error conectando a la base de datos.";
            exit();
        }
        return $conexion;
    }
    conectar();
    echo "Conexión exitosa";
?>
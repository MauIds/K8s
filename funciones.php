<?php
    ///////////////////////////////////////////////
    ///// variables/constantes globales  /////////
    ///////////////////////////////////////////////

    define ("servidor", "localhost");
    define ("basededatos", "dbperrona");
    define ("usuario", "lectura");
    define ("password", "mipassword");
    ////////////////////////////////////////////////7
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
<?php
    include 'db_config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["usuario"];
        $pass = $_POST["llave"];

        $conexion = conectar();

        // Verificar si el usuario ya existe
        $query = "SELECT * FROM usuarios WHERE usuario = '$user'";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "El usuario ya existe.";
        } else {
            // Insertar nuevo usuario
            $query = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$user', '$pass')";
            if (mysqli_query($conexion, $query)) {
                echo "Usuario registrado exitosamente.";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conexion);
            }
        }

        mysqli_close($conexion);
    }
?>
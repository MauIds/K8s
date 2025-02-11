<?php
    session_start();
    include 'db_config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["usuario"];
        $pass = $_POST["llave"];

        $conexion = conectar();

        $query = "SELECT * FROM usuarios WHERE usuario = '$user' AND contraseña = '$pass'";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION["usuario"] = $user;
            header("Location: welcome.php");
            exit();
        } else {
            $error = "El usuario o contraseña son incorrectos";
        }

        mysqli_close($conexion);
    }
?>

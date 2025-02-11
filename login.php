<?php
    session_start();
    //Usuarios
    $usuarios = ["usuario1" => "12345", "admin" => "admin"];
    //Validar si el usuario y contraseña son correctos
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = $_POST["usuario"];
        $pass = $_POST["llave"];
        if(isset($usuarios[$user]) && $usuarios[$user]==$pass){
            $_SESSION["usuario"] = $user;
            header("Location: main.php");
            exit();
        } else{
            $error = "El usuario o contraseña son incorrectos";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="POST" action="login.php">
        <label>Usuario:</label>
        <input type="text" name="usuario"><br>
        <label>Contraseña:</label>
        <input type="password" name="llave"><br>
        <input type="submit" value="Ingresar">
    </form>
    <?php
        if (isset($error)) {
            echo "<p>" . $error . "</p>";
        }
    ?>
</body>
</html>
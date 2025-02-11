<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION["usuario"]; ?></h1>
    <a href = "logout.php">Cerrar sesión</a>
</body>
</html>
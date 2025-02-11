<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
<form method="POST" action="nuevoUsuario.php">
    <label>Usuario: </label>
    <input type="text" name="usuario" required><br>
    <label>Contraseña: </label>
    <input type="password" name="password" required><br>
    <label>Nombre: </label>
    <input type="text" name="nombre" required><br>
    <label>Apellido: </label>
    <input type="text" name="apellido" required><br>
    <label>Correo: </label>
    <input type="text" name="correo" required><br>
    <button type="submit">Enviar</button>
</form>
    <?php
        if(isset($error)){
            echo "<p>". $error . "</p>";
        }
    ?>
</body>
</html>
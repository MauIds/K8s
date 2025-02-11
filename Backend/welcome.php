<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Frontend/index.html");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../Frontend/styles.css">
</head>
<body>
    <div class="container">
        <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>
        <form method="POST" action="logout.php">
            <input type="submit" value="Cerrar sesión">
        </form>
    </div>
</body>
</html>
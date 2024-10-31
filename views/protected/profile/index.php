<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION["credentials"]) || !$_SESSION["credentials"]) {
            echo "<p>Usuario NO Autorizado</p>";
            exit;
        }
    ?>
    <h1>Mi perfil</h1>
    <ul>
        <li><a href="change_password.php">Cambiar mi contraseña</a></li>
    </ul>
</body>
</html>
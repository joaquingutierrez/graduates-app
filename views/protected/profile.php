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
            exit;
        }
    ?>
    <h1>Mi perfil</h1>
    <ul>
        <li>Cambiar mi contraseña</li>
    </ul>
</body>
</html>
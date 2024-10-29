<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graduados</title>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION["credentials"]) || !$_SESSION["credentials"]) {
            exit;
        }
    ?>
    <h1>Graduados Menu</h1>
    <ul>
        <li>Ver lista de Graduados</li>
        <li>Ver lista de Graduados: Pendientes</li>
        <li>Ver lista de Graduados: Rechazados</li>
        <li>Ver lista de Graduados: Confirmados</li>
    </ul>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras</title>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION["credentials"]) || !$_SESSION["credentials"]) {
            exit;
        }
    ?>
    <h1>Carreras Menu</h1>
    <ul>
        <li>Alta</li>
        <li>Baja</li>
        <li>Modificacion</li>
    </ul>
</body>
</html>
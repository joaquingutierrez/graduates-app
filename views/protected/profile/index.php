<?php
    require_once(__DIR__."/../../../utils/const.php");
    session_start();
    if (!isset($_SESSION["credentials"]) || !$_SESSION["credentials"]) {
        require_once("../../unauthorized.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
</head>
<body>
    <?php
        $url = URL_BASE."views/protected/admin_menu.php";
        echo "<a href= '". $url ."'><button>Ir al Menu</button></a>";
    ?>
    <h1>Mi perfil</h1>
    <ul>
        <li><a href="change_password.php">Cambiar mi contraseña</a></li>
    </ul>
</body>
</html>
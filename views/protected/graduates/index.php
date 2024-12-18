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
    <title>Graduados</title>
</head>
<body>
    <?php
        $url = URL_BASE."views/protected/admin_menu.php";
        echo "<a href= '". $url ."'><button>Ir al Menu</button></a>";
    ?>
    <h1>Graduados Menu</h1>
    <ul>
        <li><a href="graduates_list.php">Ver lista de Graduados</a></li>
        <li><a href="pending_graduates_list.php">Ver lista de Graduados: Pendientes (Para confimar o rechazar)</a></li>
        <li><a href="rejected_graduates_list.php">Ver lista de Graduados: Rechazados</a></li>
        <li><a href="confirmed_graduates_list.php">Ver lista de Graduados: Confirmados</a></li>
    </ul>
</body>
</html>
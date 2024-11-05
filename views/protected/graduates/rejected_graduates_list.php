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
    <title>Lista de Graduados</title>
</head>
<body>
    <?php
        $url = URL_BASE."views/protected/graduates";
        echo "<a href= '". $url ."'><button>Ir al Menu de Graduados</button></a>";
    ?>
    <h1>Lista de graduados</h1>
    <?php
        require_once(__DIR__."/../../../utils/functions.php");
        require_once(__DIR__."/../../../utils/const.php");
        $graduates = $admin -> getRejectedGraduates();
        $degrees = $admin -> getDegrees();
        renderGraduateTable($graduates, $degrees);
    ?>
</body>
</html>
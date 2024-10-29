<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
</head>
<body>
    <h1>Menu</h1>
    <?php
        session_start();
        if (!isset($_SESSION["credentials"]) || !$_SESSION["credentials"]) {
            echo "<p>Usuario NO Autorizado</p>";
            exit;
        }

        $url = "/tallerdelenguajes/TP-Integrador/views/protected";
        echo "<ul>";
        echo "<li><a href='".$url."/degrees'>Ir a Carreras</a></li>";
        echo "<li><a href='".$url."/emails'>Ir a Correos</a></li>";
        echo "<li><a href='".$url."/graduates'>Ir a Egresados</a></li>";
        echo "<li><a href='".$url."/profile'>Ir a Mi perfil</a></li>";
        echo "</ul>";
    ?>
</body>
</html>
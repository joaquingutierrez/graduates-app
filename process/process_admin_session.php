<?php
    require_once(__DIR__ . "/../utils/const.php");
    require_once(__DIR__ . "/../utils/functions.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name = trim($_POST['user_name']);
        $password = trim($_POST['password']);

        if (!$user_name || !$password) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        $result = $admin -> checkCredentials($user_name, $password);
        if ($result) {
            session_start();

            $url = "tallerdelenguajes/TP-Integrador/views/protected/admin_menu.php";
            echo "<p>¡Acceso autorizado!</p>";
            $_SESSION['credentials'] = true;
            $_SESSION['user_id'] = true;
            echo "<a href= '/". $url ."'><button>Ir al Menu</button></a>";
            return;
        }
        echo "<p>Usuario o contraseña incorrectos.</p>";
    }
?>
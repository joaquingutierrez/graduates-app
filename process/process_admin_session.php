<?php
    require_once(__DIR__ . "/../utils/const.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name = trim($_POST['user_name']);
        $password = trim($_POST['password']);

        if (!$user_name || !$password) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        $result = $admin -> checkCredentials($user_name, $password);
        if ($result) {
            echo "<p>¡Acceso autorizado!</p>";
            return;
        }
        echo "<p>Usuario o contraseña incorrectos.</p>";
    }
?>
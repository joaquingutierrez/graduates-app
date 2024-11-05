<?php
    require_once(__DIR__ . "/../../utils/const.php");
    require_once(__DIR__ . "/../../utils/functions.php");
    session_start();
    echo "
        <button id='go-back'>Volver atras</button>
        <script>
            const go_back = document.getElementById('go-back');
            go_back.addEventListener('click', () => {
                window.history.back();
            })
        </script>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_SESSION["credentials"];
        $password = trim($_POST['password']);
        $password_2 = trim($_POST['password-2']);

        if (!$password || $password !== $password_2) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        $result = $admin -> changePassword($user_id, $password);
        if ($result) {
            echo "<p>Contraseña cambiada con éxito";
            return;
        }
    }
        echo "<p>Ocurrió un error, intentelo de nuevo más tarde.";
?>
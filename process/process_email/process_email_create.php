<?php
    require_once(__DIR__ . "/../../utils/const.php");

    echo "
        <button id='go-back'>Volver atras</button>
        <script>
            const go_back = document.getElementById('go-back');
            go_back.addEventListener('click', () => {
                window.history.back();
            })
        </script>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST['email']);

        if (!$email) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        $result = $admin -> createEmail($email);
        if ($result) {
            echo "<p>Correo creado exitosamente.</p>";
            return;
        }
        echo "<p>Ocurrió un error, es posible que el correo ya exista.";
    }
?>
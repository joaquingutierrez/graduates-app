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
        $email_id = trim($_POST['select-email-id-delete']);

        if (!$email_id) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        $result = $admin -> deleteEmail($email_id);
        if ($result) {
            echo "<p>Correo eliminado exitosamente.</p>";
            return;
        }
        echo "<p>Ocurrió un error. Por favor, vuelva a intentarlo más tarde.";
    }
?>
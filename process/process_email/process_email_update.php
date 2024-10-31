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
        $email_id = trim($_POST['select-email-id']);
        $new_email = trim($_POST['new-email']);

        if (!$new_email) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        $result = $admin -> editEmail($email_id, $new_email);
        if ($result) {
            echo "<p>Correo actualizado exitosamente.</p>";
            return;
        }
        echo "<p>Ocurrió un error. Por favor, vuelva a intentarlo más tarde.";
    }
?>
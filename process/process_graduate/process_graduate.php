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
        $graduate_id = trim($_POST['select-graduate-id']);
        $confirm_reject = trim($_POST['action']);

        if (!$confirm_reject) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        if ($confirm_reject === "confirm") {
            $result = $admin -> confirmGraduate($graduate_id);
            if ($result) {
                echo "<p>Graduado confimado con éxito.</p>";
                return;
            }
        } else {
            $result = $admin -> rejectGraduate($graduate_id);
            if ($result) {
                echo "<p>Graduado rechazado con éxito.</p>";
                return;
            }
        }
        echo "<p>Ocurrió un error, es posible que el correo ya exista.";
    }
?>
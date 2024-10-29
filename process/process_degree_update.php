<?php
    require_once(__DIR__ . "/../utils/const.php");

    echo "
        <button id='go-back'>Volver atras</button>
        <script>
            const go_back = document.getElementById('go-back');
            go_back.addEventListener('click', () => {
                window.history.back();
            })
        </script>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $degree_id = trim($_POST['select-degree-id']);
        $new_name = trim($_POST['new-name']);

        if (!$new_name) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        $result = $admin -> editDegree($degree_id, $new_name);
        if ($result) {
            echo "<p>Carrera actualizada exitosamente.</p>";
            return;
        }
        echo "<p>Ocurrió un error. Por favor, vuelva a intentarlo más tarde.";
    }
?>
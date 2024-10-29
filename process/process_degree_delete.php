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
        $degree_id = trim($_POST['select-degree-id-delete']);

        if (!$degree_id) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        $result = $admin -> deleteDegree($degree_id);
        if ($result) {
            echo "<p>Carrera eliminada exitosamente.</p>";
            return;
        }
        echo "<p>Ocurrió un error. Por favor, vuelva a intentarlo más tarde.";
    }
?>
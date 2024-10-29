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
        $name = trim($_POST['name']);

        if (!$name) {
            echo "<p>Por favor, complete todos los campos.</p>";
            return;
        }
        $result = $admin -> createDegree($name);
        if ($result) {
            echo "<p>Carrera creada exitosamente.</p>";
            return;
        }
        echo "<p>Ocurrió un error, es posible que la carrera ya exista.";
    }
?>
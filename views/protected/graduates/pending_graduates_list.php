<?php
    require_once(__DIR__."/../../../utils/const.php");
    session_start();
    if (!isset($_SESSION["credentials"]) || !$_SESSION["credentials"]) {
        require_once("../../unauthorized.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Graduados</title>
</head>
<body>
    <h1>Lista de graduados</h1>
    <?php
        require_once(__DIR__."/../../../utils/functions.php");
        $graduates = $admin -> getPendingGraduates();
        $degrees = $admin -> getDegrees();
        renderGraduateTable($graduates, $degrees);
    ?>
    <form action="/tallerdelenguajes/TP-Integrador/process/process_graduate/process_graduate.php" method="post">
        <div>
            <label for="select-graduate-id">Seleccionar Egresado</label>
            <select name="select-graduate-id" id="select-graduate-id">
                <option selected value="">Seleccionar...</option>
                <?php
                    foreach ($graduates as $graduate) {
                        echo "<option value='".$graduate["id"]."'>".$graduate["email"]."</option>";
                    }
                ?>
            </select>
        </div>
        <input type="hidden" name="action" id="action-value" value="">
        <input type="submit" onclick="setAction('confirm');" value="Confirmar">
        <input type="submit" onclick="setAction('reject');" value="Rechazar">
    </form>
    <script>
        function setAction(value) {
            document.getElementById('action-value').value = value;
        }
        
    </script>
</body>
</html>
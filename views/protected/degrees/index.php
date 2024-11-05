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
    <title>Carreras</title>
</head>
<body>
    <?php
    ?>
    <h1>Carreras Menu</h1>
    <ul id="menu-options">
        <li data-value="create">Alta</li>
        <li data-value="delete">Baja</li>
        <li data-value="update">Modificacion</li>
    </ul>

    <div id="render-create" style="display: none;">
        <form action=<?php echo URL_BASE."process/process_degree_create.php"; ?> method="post">
            <div>
                <label for="name">Nombre de la Carrera</label>
                <input type="text" name="name" id="name" placeholder="Introduzca el nombre de la Carrera...">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <div id="render-update" style="display: none;">
        <form action=<?php echo URL_BASE."process/process_degree_update.php"; ?> method="post">
            <div>
                <label for="select-degree-id">Seleccionar Carrera</label>
                <select name="select-degree-id" id="select-degree-id">
                    <option selected value="">Seleccionar...</option>
                    <?php
                        $degrees = $admin -> getDegrees();
                        while ($row = $oBase -> createAssociativeArray($degrees)) {
                            echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
                        }
                    ?>
                </select>
            </div>
            <div id="render-edit-degree" style="display: none;">
                <label for="new-name">Nuevo nombre de la Carrera</label>
                <input type="text" name="new-name" id="new-name" placeholder="Introduzca el nombre de la Carrera...">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <div id="render-delete" style="display: none;">
        <form action=<?php echo URL_BASE."process/process_degree_delete.php"; ?> method="post">
        <label for="select-degree-id-delete">Seleccionar Carrera</label>
            <select name="select-degree-id-delete" id="select-degree-id-delete">
                <option selected value="">Seleccionar...</option>
                <?php
                    $degrees = $admin -> getDegrees();
                    while ($row = $oBase -> createAssociativeArray($degrees)) {
                        echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Eliminar">
        </form>
    </div>

    <script src="main.js"></script>
</body>
</html>
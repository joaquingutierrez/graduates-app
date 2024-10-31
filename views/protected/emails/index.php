<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correos</title>
</head>
<body>
    <?php
        require_once(__DIR__."/../../../utils/const.php");
        session_start();
        if (!isset($_SESSION["credentials"]) || !$_SESSION["credentials"]) {
            echo "<p>Usuario NO Autorizado</p>";
            exit;
        }
    ?>
    <h1>Correos Menu</h1>
    <ul id="menu-options">
        <li data-value="create">Alta</li>
        <li data-value="delete">Baja</li>
        <li data-value="update">Modificacion</li>
    </ul>
    <div id="render-create" style="display: none;">
        <form action="/tallerdelenguajes/TP-Integrador/process/process_email/process_email_create.php" method="post">
            <div>
                <label for="email">Correo nuevo:</label>
                <input type="email" name="email" id="email" placeholder="Introduzca el correo...">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <div id="render-update" style="display: none;">
        <form action="/tallerdelenguajes/TP-Integrador/process/process_email/process_email_update.php" method="post">
            <div>
                <label for="select-email-id">Seleccionar Correo</label>
                <select name="select-email-id" id="select-email-id">
                    <option selected value="">Seleccionar...</option>
                    <?php
                        $emails = $admin -> getEmails();
                        while ($row = $oBase -> createAssociativeArray($emails)) {
                            echo "<option value='".$row["id"]."'>".$row["email"]."</option>";
                        }
                    ?>
                </select>
            </div>
            <div id="render-edit-email" style="display: none;">
                <label for="new-email">Reemplazar el correo por:</label>
                <input type="email" name="new-email" id="new-email" placeholder="Introduzca el email...">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <div id="render-delete" style="display: none;">
        <form action="/tallerdelenguajes/TP-Integrador/process/process_email/process_email_delete.php" method="post">
        <label for="select-email-id-delete">Seleccionar Correo</label>
            <select name="select-email-id-delete" id="select-email-id-delete">
                <option selected value="">Seleccionar...</option>
                <?php
                    $emails = $admin -> getEmails();
                    while ($row = $oBase -> createAssociativeArray($emails)) {
                        echo "<option value='".$row["id"]."'>".$row["email"]."</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Eliminar">
        </form>
    </div>

    <script src="main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Integrador</title>
</head>
<body>
    <?php
        require_once("utils/db.php");
        require_once("class/CAdministrator.php");
        $admin = new CAdministrator($oBase);
        /* TESTING */
        $admin -> createDegree("Tecnicatura Universitaria en Programacion");
        $admin -> editDegree(1,"HOLAA");
        $admin -> deleteDegree(2);
        $admin -> createEmail("joaquinguty@gmail.com");
        $admin -> createEmail("joaquinguty2@gmail.com");
        $admin -> createEmail("lucasguty @gmail.com");
        $admin -> createEmail("pedrogutygmail.com");
        $admin -> editEmail(1, "editado@gmail.com");
        $admin -> deleteEmail(2);
        $admin -> sendEmails(2);
    ?>
    <h1>TP Integrador</h1>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Integrador</title>
</head>
<body>
    <?php
        require_once(__DIR__ . "/utils/const.php");
        require_once(__DIR__ . "/class/CAdministrator.php");
        require_once(__DIR__ . "/class/CGraduates.php");

        /* require_once("utils/testing.php") */
    ?>
    <header>
        <h1>Graduados App</h1>
        <button>Iniciar Sesión</button>
    </header>
    <main>
        <h2>Ingreso del Graduado</h2>
        <form action="process/process_graduate.php" method="post">
            <div>
                <label for="full_name">Nombre y Apellido</label>
                <input type="text" name="full_name" id="full_name" placeholder="Nombre Apellido">
            </div>
            <div>
                <label for="student_number">Nro. de Matricula</label>
                <input type="number" name="student_number" id="student_number" placeholder="11111">
            </div>
            <div>
                <label for="degree_id">Carrera</label>
                <input type="text" name="degree_id" id="degree_id" placeholder="Nombre de la Carrera...">
            </div>
            <div>
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" placeholder="Email...">
            </div>
            <div>
                <label for="phone">Teléfono</label>
                <input type="text" name="phone" id="phone" placeholder="111 222 3333">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>
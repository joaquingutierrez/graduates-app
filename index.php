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
    ?>
    <header>
        <h1>Graduados App</h1>
        <a href="views/admin_session.php"><button>Iniciar Sesión</button></a>
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
                <input type="tel" name="phone" id="phone" placeholder="1234567890">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>
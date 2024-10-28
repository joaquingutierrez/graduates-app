<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <base href="/tallerdelenguajes/TP-Integrador/">
</head>
<body>
    <h1>Inicio de Sesión del Administrador</h1>
    <form action="process/process_admin_session.php" method="post">
        <div>
            <label for="user_name">Nombre de Usuario</label>
            <input type="email" name="user_name" id="user_name">
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
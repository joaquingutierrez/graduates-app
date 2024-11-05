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
    <title>Cambiar contraseña</title>
</head>
<body>
    <?php
        $url = URL_BASE."views/protected/profile";
        echo "<a href= '". $url ."'><button>Ir al Menu de Perfil</button></a>";
    ?>
    <h1>Cambio de contraseña</h1>
    <form action=<?php echo URL_BASE."process/process_profile/process_change_password.php"; ?> method="post" id="change-password-form">
        <div>
            <label for="password">Nueva contraseña</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password-2">Vuelva a introducir la contraseña</label>
            <input type="password" name="password-2" id="password-2">
        </div>

        <input id="change-password-button" type="submit" value="Cambiar">
    </form>

    <script>
        const form = document.getElementById("change-password-form");
        const change_password_button = document.getElementById("change-password-button");
        const password_input = document.getElementById("password");
        const password_input_2 = document.getElementById("password-2");
        let password = "";
        let password_2 = "";
        password_input.addEventListener("change", (e) => {
            password = e.target.value;
        });
        password_input_2.addEventListener("change", (e) => {
            password_2 = e.target.value;
        });
        const passwordMatch = () => {
            return password && password === password_2;
        }

        form.addEventListener("submit", (e) => {
        if (!passwordMatch()) {
            e.preventDefault();
            alert("Las contraseñas no coinciden");
        }
    });

    </script>
</body>
</html>
<?php
    require_once(__DIR__ . "/../utils/const.php");
    require_once(__DIR__ . "/../utils/validations.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = trim($_POST['full_name']);
        $student_number = trim($_POST['student_number']);
        $degree_id = trim($_POST['degree_id']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        if (isGraduateDataComplete($full_name, $degree_id, $student_number, $email, $phone)) {
            $result = $oGraduates -> insertGraduate($full_name, $degree_id, $student_number, $email, $phone);
            if ($result) {
                $admin -> sendEmails($full_name, $degree_id, $student_number, $email, $phone);
                echo "<p>¡Graduado creado con éxito!</p>";
                return;
            }
            echo "<p>¡Ups! Ocurrió un error, por favor vuelva a intentarlo más tarde.</p>";
        }
        echo "<p>Por favor, llene todos los campos.</p>";
    }
?>
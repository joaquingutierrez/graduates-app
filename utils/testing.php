<?php
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
        /* $admin -> sendEmails(); */

        $oGraduates = new CGraduates($oBase);
        $oGraduates -> insertGraduate();
        $graduate_full_name = "Joaquin Gutierrez";
        $graduate_degree_id = 1;
        $graduate_student_number = 1234;
        $graduate_email = "joaquinguty@gmail.com";
        $graduate_phone = "223 546 2295";
        $oGraduates -> insertGraduate($graduate_full_name, $graduate_degree_id, $graduate_student_number, $graduate_email, $graduate_phone);
        $admin -> confirmGraduate(2);
        $admin -> rejectGraduate(2);
        print_r($admin -> getConfirmedGraduates());
        print_r($admin -> getRejectedGraduates());
        print_r($admin -> getPendingGraduates());
        print_r($admin -> getGraduates());
        $admin -> changePassword(1, "Hola, mi nueva contraseña");
?>
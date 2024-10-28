<?php
    function isGraduateDataComplete ($full_name = "", $degree_id = 0, $student_number = 0, $email = "", $phone = "" ) {
        return ($full_name && $degree_id && $student_number && $email && $phone);
    }

    function isValidDegreeName ($d) {
        if (!preg_match("/^[a-zA-Z\s]{1,50}$/", $d)) {
            return false;
        } else {
            return true;
        }
    }

    function isValidEmail ($e) {
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $e)) {
            return false;
        } else {
            return true;
        }
    }
?>
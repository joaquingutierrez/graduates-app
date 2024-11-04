<?php
    $sql_words = array(
        "SELECT",
        "FROM",
        "INTO",
        "DELETE",
        "UPDATE",
        "INSERT",
        "DROP",
        "CREATE",
        "--",
        "ALTER"
    );

    function containSQLword ($e) {
        global $sql_words;
        $e = strtoupper($e);
        foreach ($sql_words as $sql_word) {
            if ($e === $sql_word) {
                return True;
            }
        }
        return False;
    }
    
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

    function isValidFullName ($e) {
        $arreglo_palabras = explode(" ", $e);
        foreach ($arreglo_palabras as $palabra) {
            if (!preg_match("/^[A-Z][a-z]{1,20}$/", $palabra) || containSQLword($e)) {
                return false;
            }
        }
        return true;
    }

    function isValidDegreeId ($e) {
        if (!preg_match("/^[1-9]\d{0,2}$/", $e)) {
            return false;
        } else {
            return true;
        }
    }

    function isValidStudentNumber ($e) {
        if (!preg_match("/^\d{6}$/", $e)) {
            return false;
        } else {
            return true;
        }
    }

    function isValidPhone ($e) {
        if (!preg_match("/^\+?[1-9]\d{1,14}$/", $e)) {
            return false;
        } else {
            return true;
        }
    }

    function isValidPassword ($e) {
        if (!preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*(),.?":{}|<>_])(?=.{8,})(?!.*\s).*/', $e)) {
            return false;
        } else {
            return true;
        }
    }
?>
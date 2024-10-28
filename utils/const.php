<?php
    require_once(__DIR__ . "/../class/CMySQLi.php");
    require_once(__DIR__ . "/../class/CGraduates.php");
    require_once(__DIR__ . "/../class/CAdministrator.php");

    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DB", "app_egresados_db");

    $oBase = new CMySQLi(HOST, USER, PASSWORD, DB);
    $oGraduates = new CGraduates($oBase);
    $admin = new CAdministrator($oBase);

?>
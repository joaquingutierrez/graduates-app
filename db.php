<?php
    require_once("class/CMySQLi.php");

    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DB", "app_egresados_db");

    $oBase = new CMySQLi(HOST, USER, PASSWORD, DB);

    
?>
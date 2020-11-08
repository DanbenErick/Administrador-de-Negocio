<?php
    // error_reporting(0);
    // $ruta_section = "";
    defined("PATH_CONN_DB")
    or define("PATH_CONN_DB", realpath(dirname(__FILE__) . '/src/php/db/conexion.php'));

    defined("PATH_PHP_FUNCTIONS")
    or define("PATH_PHP_FUNCTIONS", realpath(dirname(__FILE__) .  '/src/php/'))
?>
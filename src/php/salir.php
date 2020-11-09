<?php
session_start();
require_once "funciones/funciones.php";

if(cerrar_sesion()['ok']) {
    header('Location: ../../index.php');
}


?>
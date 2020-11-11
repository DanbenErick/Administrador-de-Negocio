<?php

require_once "funciones/funciones.php";
$id = $_GET['id'];
$activar = activar_cuenta($id);

if($activar['ok']) {
    header('Location: ../../public/pages/empleados.php');
}else {
    var_dump($activar);
    header('Location: ../../public/pages/empleados.php');
}
?>
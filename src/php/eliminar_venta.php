<?php

require_once "funciones/funciones.php";

$id = $_GET['id'];

if(detectar_vacio($id)) {
    $venta = eliminar_venta($id);
    if($venta['ok']) {
        header('Location: ../../public/pages/vender.php');
    }else {
        // var_dump($venta);
        header('Location: ../../public/pages/vender.php');
    }
}

?>
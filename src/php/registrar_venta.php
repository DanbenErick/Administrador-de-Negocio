<?php

session_start();
require_once "funciones/funciones.php";

$producto = $_POST['producto'];
$cliente = $_POST['cliente'];
$cantidad = $_POST['cantidad'];

if(detectar_vacio($producto, $cliente, $cantidad)) {
    $venta = registrar_venta($producto, $cliente, $cantidad, $_SESSION['id_usuario']);
    if($venta['ok']) {
        header('Location: ../../public/pages/vender.php');
    }else {
        var_dump($venta);
        // header('Location: ../../public/pages/vender.php');
    }
}

?>
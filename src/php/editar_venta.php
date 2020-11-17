<?php

require_once "funciones/funciones.php";

$id_venta = $_POST['id'];
$producto = $_POST['producto'];
$cliente = $_POST['cliente'];
$cantidad = $_POST['cantidad'];

if(detectar_vacio($id_venta, $producto, $cliente, $cantidad)) {
    $venta = editar_venta($id_venta, $producto, $cliente, $cantidad);
    if($venta['ok']) {
        header("Location: ../../public/pages/vender.php");
    }else {
        var_dump($venta);
        header("Location: ../../public/pages/vender.php");
    }
}

?>
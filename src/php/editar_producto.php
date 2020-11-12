<?php

require_once "funciones/funciones.php";
session_start();
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$proveedor = $_POST['proveedor'];

$producto = editar_producto($id, $nombre, $precio, $cantidad, $categoria, $proveedor);

if($producto['ok']) {
    header("Location: ../../public/pages/productos.php");
}else {
    var_dump($producto);
    // header("Location: ../../public/pages/productos.php");
}

?>
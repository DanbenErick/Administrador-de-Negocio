<?php

require_once "funciones/funciones.php";
session_start();
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$proveedor = $_POST['proveedor'];

$producto = registrar_producto($nombre, $precio, $cantidad, $categoria, $proveedor, $_SESSION['id_usuario']);

if($producto['ok']) {
    header("Location: ../../public/pages/productos.php");
}else {

}

?>
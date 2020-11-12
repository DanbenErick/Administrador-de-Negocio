<?php

require_once "funciones/funciones.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$proveedor = editar_proveedor($id, $nombre, $direccion, $telefono);

if($proveedor['ok']) {
    header('Location: ../../public/pages/proveedores.php');
}else {
    var_dump($proveedor);
    header('Location: ../../public/pages/proveedores.php');
}

?>
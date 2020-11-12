<?php

require_once "funciones/funciones.php";

$id = $_GET['id'];

$proveedor = eliminar_proveedor($id);

if($proveedor['ok']) {
    header('Location: ../../public/proveedores.php');
}else {
    var_dump($proveedor);
    header('Location: ../../public/proveedores.php');
}

?>
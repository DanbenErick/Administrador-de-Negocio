<?php
session_start();
require_once "funciones/funciones.php";
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

if(detectar_vacio($nombre, $direccion, $telefono)) {
    $proveedor = registrar_proveedor($nombre, $direccion, $telefono, $_SESSION['id_usuario']);
    if($proveedor['ok']) {
        header('Location: ../../public/pages/proveedores.php');
    } else {
        header('Location: ../../public/pages/proveedores.php');
        var_dump($proveedor);
    }
}


?>
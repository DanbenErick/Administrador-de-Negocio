<?php
session_start();
require_once "funciones/funciones.php";
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
if(registrar_proveedor($nombre, $direccion, $telefono, $_SESSION['id_usuario'])['ok']) {
    header('Location: ../../public/pages/proveedores.php');
}


?>
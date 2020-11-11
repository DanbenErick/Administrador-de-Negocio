<?php

require_once "funciones/funciones.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$tipo = $_POST['tipo'];


$cliente = editar_cliente($id,$nombre, $direccion, $telefono, $dni, $tipo);

if($cliente['ok']) {
    header('Location: ../../public/pages/clientes.php');
}else {
    var_dump($cliente);
    // header('Location: ../../public/pages/clientes.php');
}

?>
<?php
session_start();
require_once "funciones/funciones.php";


$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$tipo = $_POST['tipo'];

if(detectar_vacio($nombre, $direccion, $telefono, $dni, $tipo)) {
    $registro = registrar_cliente($nombre, $direccion, $telefono, $dni, $tipo, $_SESSION['id_usuario']);
    if($registro['ok']) {
        header('Location: ../../public/pages/clientes.php');
    }
    var_dump($registro);
}
?>
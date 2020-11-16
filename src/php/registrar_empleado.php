<?php
require_once "funciones/funciones.php";

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$pass = $_POST['password'];

if(detectar_vacio($nombre, $usuario, $pass)) {
    $empleado =registrar_empleado($nombre, $usuario, $pass);
    if($empleado['ok']) {
        header('Location: ../../public/pages/empleados.php');
    }
}
?>
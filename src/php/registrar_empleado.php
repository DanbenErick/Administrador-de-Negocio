<?php
require_once "funciones/funciones.php";

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$pass = $_POST['password'];


if(registrar_empleado($nombre, $usuario, $pass)['ok']) {
    header('Location: ../../public/pages/panel.php');
}
echo "Ocurrio un error";

?>
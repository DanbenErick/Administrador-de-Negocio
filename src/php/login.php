<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];

require_once 'funciones/funciones.php';

if(login($usuario, $password)['ok']) {
	header("Location: ../../public/pages/panel.php");
}
echo "Ocurrio un error";

?>
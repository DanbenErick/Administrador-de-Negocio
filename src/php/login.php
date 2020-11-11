<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];

require_once 'funciones/funciones.php';
$login = login($usuario, $password);
if($login['ok']) {
	header("Location: ../../public/pages/panel.php");
}else {
	header("Location: ../../index.php");
}
// var_dump($login);
// echo "Ocurrio un error";

?>
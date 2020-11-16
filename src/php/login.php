<?php

require_once 'funciones/funciones.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if(detectar_vacio($usuario, $password)) {
	$login = login($usuario, $password);
	if($login['ok']) {
		header("Location: ../../public/pages/panel.php");
	}else {
		header("Location: ../../index.php");
	}
}
?>
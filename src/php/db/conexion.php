<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "almacen";
	try {
		$pdo = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
	} catch (PDOException $e) {
		echo 'Falló la conexión: ' . $e->getMessage();
	}

?>
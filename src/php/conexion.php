<?php

	try {
		$conexion = new PDO("mysql:host=localhost;dbname=database", "root", "");
	} catch (PDOException $e) {
		echo 'Falló la conexión: ' . $e->getMessage();
	}

?>
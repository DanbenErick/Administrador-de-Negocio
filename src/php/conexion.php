<?php
$conexion = new mysqli("localhost", "root", "", "database");
if (!$conexion)
		{
		  die('No se puede conectar: '.mysqli_error($conexion));
		}

?>
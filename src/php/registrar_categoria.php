<?php
session_start();
$categoria = $_POST['nombre_categoria'];
require_once "funciones/funciones.php";

if(registrar_categoria($categoria, $_SESSION['id_usuario'])['ok']) {
    echo "Registro correcto";
    header("Location: ../../index.php");
}else {
    echo "Ocurrio un error al registro";
    // var_dump()
}

?>
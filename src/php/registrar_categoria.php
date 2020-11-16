<?php
session_start();
require_once "funciones/funciones.php";

$categoria = $_POST['nombre_categoria'];

if(detectar_vacio($categoria)) {
    if(registrar_categoria($categoria, $_SESSION['id_usuario'])['ok']) {
        echo "Registro correcto";
        header("Location: ../../public/pages/categorias.php");
    }else {
        echo "Ocurrio un error al registro";
        // var_dump()
    }
}

?>
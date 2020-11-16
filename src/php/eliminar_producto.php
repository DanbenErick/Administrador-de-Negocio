<?php

require_once "funciones/funciones.php";

$id = $_GET['id'];

if(detectar_vacio($id)) {
    $producto = eliminar_producto($id);

    if($producto['ok']) {
        header('Location: ../../public/pages/productos.php');
    } else {
        var_dump($cliente);
        header('Location: ../../public/pages/productos.php');
    }
}

?>
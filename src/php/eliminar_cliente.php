<?php

require_once "funciones/funciones.php";

$id = $_GET['id'];
if(detectar_vacio($id)) {
    $cliente = eliminar_cliente($id);
    if($cliente['ok']) {
        header('Location: ../../public/pages/clientes.php');
    } else {
        var_dump($cliente);
        header('Location: ../../public/pages/clientes.php');
    }
}

?>
<?php

require_once "funciones/funciones.php";

$id = $_GET['id'];

$categoria = eliminar_categoria($id);

if($categoria['ok']) {
    header('Location: ../../public/pages/categorias.php');
}else {
    // header('Location: ../../public/pages/categorias.php');
    var_dump($categoria);
}


?>
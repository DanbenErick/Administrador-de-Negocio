<?php

require_once "funciones/funciones.php";

$id = $_POST['id'];
$nombre = $_POST['nombre_categoria'];
$categoria = editar_categoria($id, $nombre);

if($categoria['ok']) {
    // echo "todo ok";
    header('Location: ../../public/pages/categorias.php');
}else {
    // header('Location: ../../public/pages/categorias.php');
    var_dump($categoria);
}


?>
<?php

require_once "funciones/funciones.php";

$id = $_GET['id'];

if(detectar_vacio($id)) {
    if($id != 1) {
        $eliminar = eliminar_empleado($id);
        if($eliminar['ok']) {
            header("Location: ../../public/pages/empleados.php");
        }else {
            var_dump($eliminar);
            // header("Location: ../../public/pages/empleados.php");
        }
    }else {
        echo "no se puede eliminar al administrador";
    }
}

?>
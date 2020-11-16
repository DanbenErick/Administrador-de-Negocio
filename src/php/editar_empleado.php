<?php 

require_once "funciones/funciones.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if(detectar_vacio($id, $nombre, $usuario, $password)){
    if($id != 1) {
        $editar = editar_empleado($id, $nombre, $usuario, $password);
        if($editar['ok']) {
            // echo "todo ok";
            header('Location: ../../public/pages/empleados.php');
        }else {
            // var_dump($editar);
            // echo "error";
            header('Location: ../../public/pages/empleados.php');
        }
    }else {
        echo "No esta permitido editar al administrador";
    }
}
?>
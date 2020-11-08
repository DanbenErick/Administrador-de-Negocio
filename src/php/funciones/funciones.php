<?php

require_once('../../config.php');
require_once(PATH_CONN_DB);

function login($usuario, $password) {
		if(!empty($usuario) && !empty($password)) {
            global $pdo;
            $sql = "SELECT * FROM empleado WHERE usuario = :usuario";
            $query = $pdo->prepare($sql);
            $query->bindParam(':usuario', $usuario);
            if($query->execute()) {

                foreach($query->fetchAll() as $valor) {
                    // var_dump($valor);

                    if($valor['usuario'] == $usuario) {
                        if(password_verify($password, $valor['pass']) && $valor['activado'] == 1 ){
                            session_start();
                            $_SESSION['id_usuario'] = $valor['id'];
                            $_SESSION['nombre'] = $valor['nombre'];
                            $_SESSION['id_rol'] = $valor['rol'];
                            echo "ingresaste al sistema " . $_SESSION['nombre'];
                            header("Location: ../../public/pages/panel.php");
                        }else {
                            // La contraseña no coincide
                            
                        }
                    } else {
                        // El usuario no existe
                    }
                }
            }else {
                print($query->errorInfo());
                // La consulta fallo
                // retornar_to_login("fail");
            }
        }else {
            echo "vacio";
            //No rrellenaste todos los campos
            // retornar_to_login("empty_camps");
        }
}

function cerrar_sesion() {
    session_destroy();
}

function go_login() {
    header('Location: ../../index.php');
}


?>
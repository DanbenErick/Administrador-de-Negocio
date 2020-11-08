<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];

require_once 'funciones/funciones.php';

login($usuario, $password);

// if(isset($_POST['login'])) {
	// $recaptcha = $_POST["g-recaptcha-response"];
	// $url = 'https://www.google.com/recaptcha/api/siteverify';
	// $data = array(
	// 	'secret' => '6LeugNkUAAAAAETcOoGUSnOkL77ATIgAULo-m6vB',
	// 	'response' => $recaptcha
	// );
	// $options = array(
	// 	'http' => array (
	// 		'method' => 'POST',
	// 		'content' => http_build_query($data)
	// 	)
	// );
	// $context  = stream_context_create($options);
	// $verify = @file_get_contents($url, false, $context);
    // $captcha_success = json_decode($verify);
    // var_dump($captcha_success);
	
// }else {
    // No ingreso por el boton submmit del formulario
//     retornar_to_login();
// }


// // Redireccionamiento

// function retornar_to_login($parametro = null) {
//     // if($parametro != "") {
//     //     header("Location: ../index.php?alert=$parametro");
//     // }
//     header("Location: ../index.php?alert=$parametro");
// }

// function ir_sistema() {
//     header("Location: ../sistema");
// }
// function ir_supervisor() {
//     header("Location: ../supervisor");
// }
?>
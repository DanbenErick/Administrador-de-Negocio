<?php
    session_start();
    error_reporting(0);
    require_once "../../src/php/funciones/funciones.php";
    if(isset($_SESSION['id_usuario'])):
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender</title>
    <link rel="stylesheet" href="../css/style-vender.css">
</head>
<body>
    <?php require_once("templates/nav.inc.php");?>
    <section>
        <?php require_once("templates/aside.inc.php");?>
        <main></main>
    </section>
</body>
</html>
<?php else: header("Location: ../../index.php"); ?>
<?php endif; ?>
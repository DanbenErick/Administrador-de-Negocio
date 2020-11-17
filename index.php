<?php 
    session_start();
    error_reporting(0);
?>
<?php if(!$_SESSION['id_usuario']): ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identifiquese</title>
    <link rel="stylesheet" href="public/css/style-index.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,300&family=Poppins:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="container_login">
            <div class="container_form">
                <h1>Identifiquese</h1>
                <form method="POST" id="formulario" action="src/php/login.php">
                    <div class="input_group">
                        <label for="usuario">Usuario</label>
                        <input type="text" required id="usuario" name="usuario">
                        <label for="errorU" id="errorU"></label>
                    </div>
                    <div class="input_group">
                        <label for="password">Contraseña</label>
                        <input type="password" required id="password" name="password">
                        <label for="errorP" id="errorP"></label>
                    </div>
                    <div class="input_group">
                        <button type="submit">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="js/validacion.js"></script>
    <noscript>Es nesesario tener activado el JS</noscript>
</body>
</html>
<?php else: header('Location: public/pages/panel.php'); endif;?>
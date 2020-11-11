<?php
session_start();
error_reporting(0);
require_once "../../src/php/funciones/funciones.php";
$empleados = traer_empleados()['data'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="../../public/css/style-empleados.css">
    <link href="https://file.myfontastic.com/n9CfQyeKJZCBsGs6dvgkTK/icons.css" rel="stylesheet">
    <style>
        .icon {
            text-decoration: none;
        }
        .desactivate {
            color: black;
        }
    </style>
</head>
<body>
    <?php require_once("templates/nav.inc.php"); ?>
    <section>
        <?php require_once("templates/aside.inc.php");?>
        <main>
            <h1 class="titulo">Crear Cuenta de Empleado</h1>
            <div class="container_form">
                <form action="../../src/php/registrar_empleado.php" method="POST">
                    <div class="input_group">
                        <label for="">Nombre del Empleado</label>
                        <input type="text" name="nombre">
                    </div>
                    <div class="input_group">
                        <label for="">Usuario del Empleado</label>
                        <input type="text" name="usuario">
                    </div>
                    <div class="input_group">
                        <label for="">Contraseña del Empleado</label>
                        <input type="text" name="password">
                    </div>
                    <div class="input_group">
                        <button type="submit">Crear Cuenta</button>
                    </div>
                </form>
            </div>

            <h2 class="titulo">Lista de Empleados</h2>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Activado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($empleados != null):?>
                            <?php foreach($empleados as $empleado):?>
                                <tr>
                                    <td><?= $empleado['nombre']?></td>
                                    <td><?= $empleado['usuario']?></td>
                                    <td>
                                        <?php if($empleado['activado'] == 1):?>
                                            <a class="icon" href="../../src/php/desactivar_cuenta.php?id=<?= $empleado['id']?>"><i class="icon-check-circle"></i></a>
                                        <?php else:?>
                                            <a class="icon desactivate" href="../../src/php/activar_cuenta.php?id=<?= $empleado['id']?>"><i class="icon-check-circle-o"></i></a>
                                        <?php endif;?>
                                    </td>
                                    <td>
                                        <i class="icon-pencil"></i>
                                        <i class="icon-trash"></i>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        <?php else:?>
                            <tr><td colspan="4">No hay contenido</td></tr>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</body>
</html>
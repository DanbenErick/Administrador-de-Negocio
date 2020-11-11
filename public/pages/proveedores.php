<?php
session_start();
error_reporting(0);
require_once "../../src/php/funciones/funciones.php";
$proveedores = traer_proveedores()['data'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    <link rel="stylesheet" href="../../public/css/style-proveedores.css">
    <link href="https://file.myfontastic.com/n9CfQyeKJZCBsGs6dvgkTK/icons.css" rel="stylesheet">
</head>
<body>
    <?php require_once("templates/nav.inc.php"); ?>
    <section>
        <?php require_once("templates/aside.inc.php");?>
        <main>
            <h1 class="titulo">Agregar Proveedor</h1>
            <div class="container_form">
                <form action="../../src/php/registrar_proveedor.php" method="POST">
                    <div class="input_group">
                        <label for="">Nombre de la Empresa</label>
                        <input type="text" name="nombre">
                    </div>
                    <div class="input_group">
                        <label for="">Direccion de la Empresa</label>
                        <input type="text" name="direccion">
                    </div>
                    <div class="input_group">
                        <label for="">Telefono de la Empresa</label>
                        <input type="text" name="telefono">
                    </div>
                    <div class="input_group">
                        <button type="submit">Agregar Proveedor</button>
                    </div>
                </form>
            </div>
            <h2 class="titulo">Lista de Proveedores</h2>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Creador</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($proveedores != null):?>
                            <?php foreach($proveedores as $proveedor):?>
                                <tr>
                                    <td><?= $proveedor['nombre']?></td>
                                    <td><?= $proveedor['direccion']?></td>
                                    <td><?= $proveedor['telefono']?></td>
                                    <?php if($_SESSION['id_rol'] == 1):?>
                                        <td><?= $proveedor['id_creador']?></td>
                                        <td>
                                            <i class="icon-pencil"></i>
                                            <i class="icon-trash"></i>
                                        </td>
                                    <?php endif;?>
                                </tr>
                            <?php endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</body>
</html>
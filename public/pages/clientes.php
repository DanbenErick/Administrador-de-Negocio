<?php
session_start();
error_reporting(0);
require_once "../../src/php/funciones/funciones.php";
$clientes = traer_clientes()['data'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../../public/css/style-clientes.css">
    <link href="https://file.myfontastic.com/n9CfQyeKJZCBsGs6dvgkTK/icons.css" rel="stylesheet">
</head>
<body>
    <?php require_once("templates/nav.inc.php"); ?>
    <section>
        <?php require_once("templates/aside.inc.php");?>
        <main>
            <h1 class="titulo">Agregar Cliente</h1>
            <div class="container_form">
                <form action="../../src/php/registrar_cliente.php" method="POST">
                    <div class="input_group">
                        <label for="">Nombre del Cliente</label>
                        <input type="text" name="nombre">
                    </div>
                    <div class="input_group">
                        <label for="">Direccion del Cliente</label>
                        <input type="text" name="direccion">
                    </div>
                    <div class="input_group">
                        <label for="">Telefono del Cliente</label>
                        <input type="text" name="telefono">
                    </div>
                    <div class="input_group">
                        <label for="">DNI del Cliente</label>
                        <input type="text" name="dni">
                    </div>
                    <div class="input_group">
                        <label for="">Tipo de Clietne</label>
                        <select name="tipo" id="">
                            <option value="0">Elige uno...</option>
                            <option value="1">Persona Natural</option>
                            <option value="2">Empresa</option>
                        </select>
                    </div>
                    <div class="input_group">
                        <button type="submit">Agregar Cliente</button>
                    </div>
                </form>
            </div>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>DNI</th>
                            <th>Tipo</th>
                            <?php if($_SESSION['id_rol'] == 1):?>
                                <th>Creador</th>
                                <th></th>
                            <?php endif;?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($clientes != null):?>
                            <?php foreach($clientes as $cliente):?>
                                <tr>
                                    <td><?= $cliente['nombre']?></td>
                                    <td><?= $cliente['direccion']?></td>
                                    <td><?= $cliente['telefono']?></td>
                                    <td><?= $cliente['dni']?></td>
                                    <td><?= $cliente['tipo'] == 1 ? 'Persona': 'Empresa' ?></td>
                                    <?php if($_SESSION['id_rol'] == 1):?>
                                        <td><?= $cliente['id_creador'] ?></td>
                                        <td>
                                            <i class="icon-pencil"></i>
                                            <i class="icon-trash"></i>
                                        </td>
                                    <?php endif;?>
                                </tr>
                            <?php endforeach;?>
                        <?php else:?>
                            <tr>
                                <td colspan="7">No hay clientes registrados</td>
                            </tr>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</body>
</html>
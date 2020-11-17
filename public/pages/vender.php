<?php
    session_start();
    error_reporting(0);
    require_once "../../src/php/funciones/funciones.php";
    $productos = traer_producto_venta()['data'];
    $clientes = traer_cliente_venta()['data'];
    $ventas = traer_ventas()['data'];
    if(isset($_SESSION['id_usuario'])):
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender</title>
    <link rel="stylesheet" href="../css/style-vender.css">
    <link href="https://file.myfontastic.com/n9CfQyeKJZCBsGs6dvgkTK/icons.css" rel="stylesheet">
</head>
<body>
    <?php require_once("templates/nav.inc.php");?>
    <section>
        <?php require_once("templates/aside.inc.php");?>
        <main>
            <?php if(isset($_GET['id'])):?>
                <h1 class="titulo">Editar Venta: Nombre</h1>
                    <div class="container_form">
                    <form action="../../src/php/editar_venta.php" method="POST">
                        <input type="hidden" name="id" value="<?= $_GET['id']?>">
            <?php else:?>
                <h1 class="titulo">Ventas</h1>
                    <div class="container_form">
                    <form action="../../src/php/registrar_venta.php" method="POST">
            <?php endif;?>
                    <div class="input_group">
                        <label for="">Producto</label>
                        <select name="producto" id="">
                        <?php foreach($productos as $producto):?>
                            <option value="<?= $producto['id']?>"><?= $producto['nombre'] ?></option>
                        <?php endforeach;?>
                        </select>
                    </div>
                    <div class="input_group">
                        <label for="">Cliente</label>
                        <select name="cliente" id="">
                        <?php foreach($clientes as $cliente):?>
                            <option value="<?= $cliente['id']?>"><?= $cliente['nombre'] ?></option>
                        <?php endforeach;?>
                        </select>
                    </div>
                    <div class="input_group">
                        <label for="cantidad">Cantidad</label>
                        <input required type="number" name="cantidad">
                    </div>
                    <div class="input_group">
                         <button type="submit">Guardar Cambios</button>
                    </div>
                </form>
            </div>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                            <th>Creador</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($ventas as $venta):?>
                            <tr>
                                <td><?= $venta['nombreProducto']?></td>
                                <td><?= $venta['cantidad']?></td>
                                <td><?= $venta['precioProducto']?></td>
                                <td><?= $venta['nombreCliente']?></td>
                                <td><?= $venta['fecha_salida']?></td>
                                <td><?= $venta['nombreEmpleado']?></td>
                                <td>
                                    <a href="vender.php?id=<?= $venta['id']?>"><i class="icon-pencil"></i></a>
                                    <a class="delete" href="../../src/php/eliminar_venta.php?id=<?= $venta['id']?>"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</body>
</html>
<?php else: header("Location: ../../index.php");?>
<?php endif; ?>
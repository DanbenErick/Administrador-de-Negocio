<?php
session_start();
error_reporting(0);
require_once "../../src/php/funciones/funciones.php";
$categorias = traer_categorias()['data'];
$proveedores = traer_proveedores()['data'];
$productos = traer_productos()['data'];
if(isset($_SESSION['id_usuario'])):
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../../public/css/style-productos.css">
    <link href="https://file.myfontastic.com/n9CfQyeKJZCBsGs6dvgkTK/icons.css" rel="stylesheet">
</head>
<body>
    <?php require_once("templates/nav.inc.php"); ?>
    <section>
        <?php require_once("templates/aside.inc.php");?>
        <main>
            <?php if(isset($_GET['id'])):?>
            <h1 class="titulo">Editar Producto: 
            <?php 
                
                /* Inicio */
               foreach($productos as $producto):?>
                        <?php 
                        if($producto['id'] == $_GET[id]){
                            ?>  <td><?= $producto['nombre']?></td>
                        <?php }
                        ?>
                <?php endforeach;?>
            </h1>
            <div class="container_form">
                <form action="../../src/php/editar_producto.php" method="POST">
                <input required type="hidden" name="id" value="<?= $_GET['id']?>">
            <?php else:?>
            <h1 class="titulo">Agregar Producto</h1>
            <div class="container_form">
                <form action="../../src/php/registrar_producto.php" method="POST">
            <?php endif;?>
                    <div class="input_group">
                        <label for="">Producto</label>
                        <input required type="text" name="nombre">
                    </div>
                    <div class="input_group">
                        <label for="">Precio</label>
                        <input required type="text" name="precio">
                    </div>
                    <div class="input_group">
                        <label for="">Cantidad</label>
                        <input required type="text" name="cantidad">
                    </div>
                    <div class="input_group">
                        <label for="">Categoria</label>
                        <select name="categoria" id="">
                            <?php foreach($categorias as $categoria):?>
                                <option value="<?= $categoria['id']?>"><?= $categoria['categoria_nombre']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="input_group">
                        <label for="">Proveedor</label>
                        <select name="proveedor" id="">
                        <?php foreach($proveedores as $proveedor):?>
                            <option value="<?= $proveedor['id']?>"><?= $proveedor['nombre']?></option>
                        <?php endforeach;?>
                        </select>
                    </div>
                    <div class="input_group">
                        <button>Guardar</button>
                    </div>
                </form>
            </div>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Categoria</th>
                            <th>Proveedor</th>
                            <th>Fecha de Ingreso</th>
                            <th>Ult Fecha Salida</th>
                            <th>Creador</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($productos as $producto):?>
                        <tr>
                            <td><?= $producto['nombre']?></td>
                            <td><?= $producto['precio']?></td>
                            <td><?= $producto['cantidad']?></td>
                            <td><?= $producto['nombreCategoria']?></td>
                            <td><?= $producto['nombreProveedor']?></td>
                            <td><?= $producto['fecha_ingreso']?></td>
                            <td><?= $producto['ult_fecha_salida']?></td>
                            <td><?= $producto['nombreEmpleado']?></td>
                            <td>
                                <a href="productos.php?id=<?= $producto['id']?>"><i class="icon-pencil"></i></a>
                                <a class="delete" href="../../src/php/eliminar_producto.php?id=<?= $producto['id']?>"><i class="icon-trash"></i></a>
                                <!-- <i class="icon-trash"></i> -->
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
    <script src="../js/script.js"></script>
</body>
</html>
<?php else: header("Location: ../../index.php"); ?>
<?php endif; ?>
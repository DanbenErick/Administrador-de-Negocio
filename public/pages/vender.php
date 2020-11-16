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
    <link href="https://file.myfontastic.com/n9CfQyeKJZCBsGs6dvgkTK/icons.css" rel="stylesheet">
</head>
<body>
    <?php require_once("templates/nav.inc.php");?>
    <section>
        <?php require_once("templates/aside.inc.php");?>
        <main>
            <h1 class="titulo">Ventas</h1>
            <div class="container_form">
                <form action="">
                    <div class="input_group">
                        <label for="">Producto</label>
                        <select name="producto" id="">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="input_group">
                        <label for="">Cliente</label>
                        <select name="cliente" id="">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="input_group">
                        <label for="cantidad">Cantidad</label>
                        <input required type="number">
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
                        <tr>
                            <td>Lapiz</td>
                            <td>10</td>
                            <td>10</td>
                            <td>Andres Manuel</td>
                            <td>10/10/10</td>
                            <td>Administrador</td>
                            <td>
                            <a href="proveedores.php?id=<?= $proveedor['id']?>"><i class="icon-pencil"></i></a>
                            <a class="delete" href="../../src/php/eliminar_proveedor.php?id=<?= $proveedor['id']?>"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</body>
</html>
<?php else: header("Location: ../../index.php"); ?>
<?php endif; ?>
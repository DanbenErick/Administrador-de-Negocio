<?php
session_start();
error_reporting(0);
require_once "../../src/php/funciones/funciones.php";
$categorias = traer_categorias()['data'];
if(isset($_SESSION['id_usuario'])):
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="../../public/css/style-categorias.css">
    <link href="https://file.myfontastic.com/n9CfQyeKJZCBsGs6dvgkTK/icons.css" rel="stylesheet">
</head>
<body>
    <?php require_once("templates/nav.inc.php"); ?>
    <section>
        <?php require_once("templates/aside.inc.php");?>
        <main>
        <?php if(isset($_GET['id'])):?>
            <h1 class="titulo">Editar Categoria:   <?php 
                
                /* Inicio */
               foreach($categorias as $categoria):?>
                        <?php 
                        if($categoria['id'] == $_GET[id]){
                            ?>  <td><?= $categoria['categoria_nombre']?></td>
                        <?php }
                        ?>
                <?php endforeach;?>
                </h1>
            <div class="container_form">
                <form action="../../src/php/editar_categoria.php" method="POST">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <?php else:?>
            <h1 class="titulo">Agregar Categoria</h1>
            <div class="container_form">
                <form action="../../src/php/registrar_categoria.php" method="POST">
        <?php endif;?>
                    <div class="input_group">
                        <label for="nombre_categoria">Nombre de la Categoria</label>
                        <input type="text" id="nombre_categoria" name="nombre_categoria">
                    </div>
                    <div class="input_group">
                    <?php if(isset($_GET['id'])):?>
                        <button type="submit">Editar Categoria</button>
                    <?php else:?>
                        <button type="submit">Registrar Categoria</button>
                    <?php endif;?>
                    </div>
                </form>
            </div>
            <h2 class="titulo">Lista de Categorias</h2>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre de la Categoria</th>
                            <?php if($_SESSION['id_rol'] == 1):?>
                                <th>Creador</th>
                                <th>Acciones</th>
                            <?php endif;?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($categorias != null):?>
                        <?php foreach($categorias as $categoria):?>
                            <tr>
                                <td><?= $categoria['categoria_nombre']?></td>
                                <?php if($_SESSION['id_rol'] == 1):?>
                                <td><?= $categoria['nombre']?></td>
                                    <td>
                                        <a href="categorias.php?id=<?= $categoria['id']?>"><i class="icon-pencil"></i></a>
                                        <a class="delete" href="../../src/php/eliminar_categoria.php?id=<?= $categoria['id']?>"><i class="icon-trash"></i></a>
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
    <script src="../js/script.js"></script>
</body>
</html>
<?php else: header("Location: ../../index.php");?>
<?php endif;?>
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
            <h1 class="titulo">Agregar Producto</h1>
            <div class="container_form">
                <form action="">
                    <div class="input_group">
                        <label for="">Producto</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Precio</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Cantidad</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Categoria</label>
                        <select name="" id="">
                            <option value="">Elige uno</option>
                        </select>
                    </div>
                    <div class="input_group">
                        <label for="">Proveedor</label>
                        <select name="" id="">
                            <option value="">Elige uno..</option>
                        </select>
                    </div>
                    <div class="input_group">
                        <button>Agregar Producto</button>
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
                        <tr>
                            <td>lapiz</td>
                            <td>10</td>
                            <td>15</td>
                            <td>Utilez de Escritorio</td>
                            <td>CredCorp</td>
                            <td>12/12/12</td>
                            <td>12/12/12</td>
                            <td>Andres</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>lapiz</td>
                            <td>10</td>
                            <td>15</td>
                            <td>Utilez de Escritorio</td>
                            <td>CredCorp</td>
                            <td>12/12/12</td>
                            <td>12/12/12</td>
                            <td>Andres</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>lapiz</td>
                            <td>10</td>
                            <td>15</td>
                            <td>Utilez de Escritorio</td>
                            <td>CredCorp</td>
                            <td>12/12/12</td>
                            <td>12/12/12</td>
                            <td>Andres</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>lapiz</td>
                            <td>10</td>
                            <td>15</td>
                            <td>Utilez de Escritorio</td>
                            <td>CredCorp</td>
                            <td>12/12/12</td>
                            <td>12/12/12</td>
                            <td>Andres</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>lapiz</td>
                            <td>10</td>
                            <td>15</td>
                            <td>Utilez de Escritorio</td>
                            <td>CredCorp</td>
                            <td>12/12/12</td>
                            <td>12/12/12</td>
                            <td>Andres</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</body>
</html>
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
                <form action="">
                    <div class="input_group">
                        <label for="">Nombre de la Empresa</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Direccion de la Empresa</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Telefono de la Empresa</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <button>Agregar Proveedor</button>
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SourceCorp</td>
                            <td>Av.Brasil</td>
                            <td>985632147</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>SourceCorp</td>
                            <td>Av.Brasil</td>
                            <td>985632147</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>SourceCorp</td>
                            <td>Av.Brasil</td>
                            <td>985632147</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>SourceCorp</td>
                            <td>Av.Brasil</td>
                            <td>985632147</td>
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
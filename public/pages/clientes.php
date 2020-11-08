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
                <form action="">
                    <div class="input_group">
                        <label for="">Nombre del Cliente</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Direccion del Cliente</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Telefono del Cliente</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">DNI del Cliente</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Tipo de Clietne</label>
                        <select name="" id="">
                            <option value="">Elige uno...</option>
                            <option value="">Persona Natural</option>
                            <option value="">Empresa</option>
                        </select>
                    </div>
                    <div class="input_group">
                        <button>Agregar Cliente</button>
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
                            <th>Creador</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Andres Manuel</td>
                            <td>av. Brasil</td>
                            <td>987456321</td>
                            <td>12345678</td>
                            <td>Persona</td>
                            <td>Andres</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Andres Manuel</td>
                            <td>av. Brasil</td>
                            <td>987456321</td>
                            <td>12345678</td>
                            <td>Persona</td>
                            <td>Andres</td>
                            <td>
                                <i class="icon-pencil"></i>
                                <i class="icon-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>Andres Manuel</td>
                            <td>av. Brasil</td>
                            <td>987456321</td>
                            <td>12345678</td>
                            <td>Persona</td>
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
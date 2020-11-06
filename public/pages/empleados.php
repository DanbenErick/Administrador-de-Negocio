<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="../../public/css/style-empleados.css">
</head>
<body>
    <?php require_once("components/nav.inc.php"); ?>
    <section>
        <?php require_once("components/aside.inc.php");?>
        <main>
            <h1 class="titulo">Crear Cuenta de Empleado</h1>
            <div class="container_form">
                <form action="">
                    <div class="input_group">
                        <label for="">Nombre del Empleado</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Usuario del Empleado</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <label for="">Contraseña del Empleado</label>
                        <input type="text">
                    </div>
                    <div class="input_group">
                        <button>Crear Cuenta</button>
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
                        <tr>
                            <td>Andres Manuel</td>
                            <td>AndreMan</td>
                            <td>
                                <i>a</i>
                            </td>
                            <td>
                                <i>a</i>
                                <i>f</i>
                            </td>
                        </tr>
                        <tr>
                            <td>Andres Manuel</td>
                            <td>AndreMan</td>
                            <td>
                                <i>a</i>
                            </td>
                            <td>
                                <i>a</i>
                                <i>f</i>
                            </td>
                        </tr>
                        <tr>
                            <td>Andres Manuel</td>
                            <td>AndreMan</td>
                            <td>
                                <i>a</i>
                            </td>
                            <td>
                                <i>a</i>
                                <i>f</i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</body>
</html>
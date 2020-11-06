<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="../../public/css/style-panel.css">
</head>
<body>
    <?php require_once("components/nav.inc.php");?>
    <section>
    <?php require_once("components/aside.inc.php");?>
        <main>
            <h1 class="titulo">Ultimas Ventas</h1>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th>Fecha</th>
                            <th>Empleado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>lapicero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>Jhon</td>
                        </tr>
                        <tr>
                            <td>lapicero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>Jhon</td>
                        </tr>
                        <tr>
                            <td>lapicero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>Jhon</td>
                        </tr>
                        <tr>
                            <td>lapicero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>Jhon</td>
                        </tr>
                        <tr>
                            <td>lapicero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>Jhon</td>
                        </tr>
                        <tr>
                            <td>lapicero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>Jhon</td>
                        </tr>
                        <tr>
                            <td>lapicero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>Jhon</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h2 class="titulo">Ultimas Adquisitiones</h2>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th>Fecha</th>
                            <th>Proveedor</th>
                            <th>Empleado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>lacipero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>CredCorp</td>
                            <td>Andres</td>
                        </tr>
                        <tr>
                            <td>lacipero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>CredCorp</td>
                            <td>Andres</td>
                        </tr>
                        <tr>
                            <td>lacipero</td>
                            <td>15</td>
                            <td>15.00</td>
                            <td>libreria</td>
                            <td>12/12/12</td>
                            <td>CredCorp</td>
                            <td>Andres</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h2 class="titulo">Ultimas Categorias Agregadas</h2>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Emplado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>lacipero</td>
                            <td>Eduardo </td>
                        </tr>
                        <tr>
                            <td>lacipero</td>
                            <td>Eduardo </td>
                        </tr>
                        <tr>
                            <td>lacipero</td>
                            <td>Eduardo </td>
                        </tr>
                        <tr>
                            <td>lacipero</td>
                            <td>Eduardo </td>
                        </tr>
                        <tr>
                            <td>lacipero</td>
                            <td>Eduardo </td>
                        </tr>
                        <tr>
                            <td>lacipero</td>
                            <td>Eduardo </td>
                        </tr>
                        <tr>
                            <td>lacipero</td>
                            <td>Eduardo </td>
                        </tr>
                        <tr>
                            <td>lacipero</td>
                            <td>Eduardo </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <span style="display: none">.container_table>table>(thead>tr>th*2)+(tbody>tr>td*2)</span>
        </main>
    </section>
</body>
</html>
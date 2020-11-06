<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="../../public/css/style-categorias.css">
</head>
<body>
    <?php require_once("components/nav.inc.php"); ?>
    <section>
        <?php require_once("components/aside.inc.php");?>
        <main>
            <h1 class="titulo">Agregar Categoria</h1>
            <div class="container_form">
                <form action="">
                    <div class="input_group">
                        <label for="nombre_categoria">Nombre de la Categoria</label>
                        <input type="text" id="nombre_categoria" name="nombre_categoria">
                    </div>
                    <div class="input_group">
                        <button>Registrar Categorias</button>
                    </div>
                </form>
            </div>
            <h2 class="titulo">Lista de Categorias</h2>
            <div class="container_table">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre de la Categoria</th>
                            <th>Creador</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>lacicero</td>
                            <td>Eduardo</td>
                            <td>
                                <i>e</i>
                                <i>a</i>
                            </td>
                        </tr>
                        <tr>
                            <td>lacicero</td>
                            <td>Eduardo</td>
                            <td>
                                <i>e</i>
                                <i>a</i>
                            </td>
                        </tr>
                        <tr>
                            <td>lacicero</td>
                            <td>Eduardo</td>
                            <td>
                                <i>e</i>
                                <i>a</i>
                            </td>
                        </tr>
                        <tr>
                            <td>lacicero</td>
                            <td>Eduardo</td>
                            <td>
                                <i>e</i>
                                <i>a</i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </section>
</body>
</html>
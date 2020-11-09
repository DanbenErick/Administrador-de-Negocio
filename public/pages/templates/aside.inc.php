<aside>
    <ul>
        <li><a href="panel.php">Inicio</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="categorias.php">Categorias</a></li>
        <li><a href="proveedores.php">Proveedores</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <?php if ($_SESSION['id_rol'] == 1):?>
            <li><a href="empleados.php">Empleados</a></li>
        <?php endif;?>
        <li><a href="../../src/php/salir.php">Salir</a></li>
    </ul>
</aside>
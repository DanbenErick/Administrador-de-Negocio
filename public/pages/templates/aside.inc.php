<aside>
    <ul id="nav" class="menu">
        <li class="logo"><a href="panel.php">Inicio</a></li>
        <li class="logo"><a href="productos.php">Productos</a></li>
        <li class="logo"><a href="vender.php">Vender</a></li>
        <li class="logo"><a href="categorias.php">Categorias</a></li>
        <li class="logo"><a href="proveedores.php">Proveedores</a></li>
        <li class="logo"><a href="clientes.php">Clientes</a></li>
        <?php if ($_SESSION['id_rol'] == 1):?>
            <li class="logo"><a href="empleados.php">Empleados</a></li>
        <?php endif;?>
        <li class="logo"><a href="../../src/php/salir.php">Salir</a></li>
    </ul>
    
</aside>


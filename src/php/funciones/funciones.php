<?php

require_once('../../config.php');
require_once(PATH_CONN_DB);


// Emplados
function activar_cuenta($id) {
    global $pdo;
    $sql = "UPDATE empleado SET activado = 1 WHERE id=:id";
    $update = $pdo->prepare($sql);
    $update->bindParam(':id', $id);
    if($update->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $update->errorInfo()
    ];
}
function desactivar_cuenta($id) {
    global $pdo;
    $sql = "UPDATE empleado SET activado = 0 WHERE id=:id";
    $update = $pdo->prepare($sql);
    $update->bindParam(':id', $id);
    if($update->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $update->errorInfo()
    ];
}
function registrar_empleado($nombre, $usuario, $pass) {
    global $pdo;
    $sql = "INSERT INTO empleado (nombre, usuario, pass, rol, activado) VALUES (:nombre,:usuario,:pass, 0, 1)";
    $new_password = password_hash($pass, PASSWORD_DEFAULT);
    $insert = $pdo->prepare($sql);
    $insert->bindParam(":nombre", $nombre);
    $insert->bindParam(":usuario", $usuario);
    $insert->bindParam(":pass", $new_password);
    if($insert->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $insert->errorInfo()
    ];
}
function traer_empleados() {
    global $pdo;
    $sql = "SELECT * FROM empleado WHERE rol=0";
    $select = $pdo->prepare($sql);
    if($select->execute()) {
        return [
            'ok' => true,
            'error' => null,
            'data' => $select->fetchAll()
        ];
    }else {
        return [
            'ok' => false,
            'error' => $select->errorInfo(),
            'data' => null
        ];
    }
}
function editar_empleado($id, $nombre, $usuario, $pass) {
    global $pdo;
    $sql = "UPDATE empleado SET nombre=:nombre, usuario=:usuario, pass=:pass WHERE id=:id";
    $new_password = password_hash($pass, PASSWORD_DEFAULT);
    $update = $pdo->prepare($sql);
    $update->bindParam(":nombre", $nombre);
    $update->bindParam(":usuario", $usuario);
    $update->bindParam(":pass", $new_password);
    $update->bindParam(":id", $id);
    if($update->execute()) {
        return [
            'ok' => true,
            'error' => null,
        ];
    }
    return [
        'ok' => false,
        'error' => $update->errorInfo()
    ];
}
function eliminar_empleado($id) {
    global $pdo;
    $sql = "DELETE FROM empleado WHERE id = :id";
    $delete = $pdo->prepare($sql);
    $delete->bindParam(":id", $id);
    if($delete->execute()){
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $delete->errorInfo()
    ];
}
function login($usuario, $password) {
		if(!empty($usuario) && !empty($password)) {
            global $pdo;
            $sql = "SELECT * FROM empleado WHERE usuario = :usuario";
            $query = $pdo->prepare($sql);
            $query->bindParam(':usuario', $usuario);
            if($query->execute()) {

                foreach($query->fetchAll() as $valor) {
                    // var_dump($valor);

                    if($valor['usuario'] == $usuario) {
                        if(password_verify($password, $valor['pass']) && $valor['activado'] == 1 ){
                            session_start();
                            $_SESSION['id_usuario'] = $valor['id'];
                            $_SESSION['nombre'] = $valor['nombre'];
                            $_SESSION['id_rol'] = $valor['rol'];
                            echo "ingresaste al sistema " . $_SESSION['nombre'];
                            return [
                                'ok' => true,
                                'error' => null
                            ];
                        }else {
                            // La contraseña no coincide
                            return [
                                'ok' => false,
                                'error' => 'la contraseña no coincide o esta deshabilitado tu cuenta'
                            ];
                        }
                    } else {
                        // El usuario no existe
                        return [
                            'ok' => false,
                            'error' => 'usuario no encontrado'
                        ];
                    }
                }
            }else {
                return [
                    'ok' => false,
                    'error' => $query->errorInfo()
                ];
                // La consulta fallo
                // retornar_to_login("fail");
            }
        }else {
            echo "vacio";
            //No rrellenaste todos los campos
            // retornar_to_login("empty_camps");
        }
}
function cerrar_sesion() {
    session_destroy();
    return [
        'ok' => true,
        'error' => null
    ];

}


// Productos
function traer_productos() {
    global $pdo;
    $sql = "SELECT e.id, e.nombre AS nombreEmpleado,
                    pr.id, pr.nombre AS nombreProveedor,
                    ct.id, ct.categoria_nombre as nombreCategoria,
                    p.*
                FROM producto as p
                INNER JOIN empleado as e ON e.id = p.id_creador
                INNER JOIN proveedor as pr ON pr.id = p.id_proveedor
                INNER JOIN categoria as ct ON ct.id = p.id_categoria";
    $select = $pdo->prepare($sql);
    if($select->execute()) {
        return [
            'ok' => true,
            'error' => null,
            'data' => $select->fetchAll()
        ];
    }else {
        return [
            'ok' => false,
            'error' => $select->errorInfo(),
            'data' => null
        ];
    }
}
function registrar_producto($nombre, $precio, $cantidad, $categoria, $proveedor, $creador) {
    global $pdo;
    $sql = "INSERT INTO producto
            (nombre, fecha_ingreso, ult_fecha_salida, precio, cantidad, id_categoria, id_creador, id_proveedor)
            VALUES
            (:nombre, NOW(), NOW(), :precio, :cantidad, :id_categoria, :id_creador, :id_proveedor)";
    $insert = $pdo->prepare($sql);
    $insert->bindParam(":nombre", $nombre);
    $insert->bindParam(":precio", $precio);
    $insert->bindParam(":cantidad", $cantidad);
    $insert->bindParam(":id_categoria", $categoria);
    $insert->bindParam(":id_proveedor", $proveedor);
    $insert->bindParam(":id_creador", $creador);
    if($insert->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $insert->errorInfo()
    ];
}
function editar_producto($id, $nombre, $precio, $cantidad, $categoria, $proveedor) {
    global $pdo;
    $sql = "UPDATE producto
            SET
            nombre = :nombre,
            precio = :precio,
            cantidad = :cantidad,
            id_categoria = :id_categoria,
            id_proveedor = :id_proveedor
            WHERE id = :id";
    $insert = $pdo->prepare($sql);
    $insert->bindParam(":nombre", $nombre);
    $insert->bindParam(":precio", $precio);
    $insert->bindParam(":cantidad", $cantidad);
    $insert->bindParam(":id_categoria", $categoria);
    $insert->bindParam(":id_proveedor", $proveedor);
    $insert->bindParam(":id", $id);
    if($insert->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $insert->errorInfo()
    ];
}
function eliminar_producto($id) {
    global $pdo;
    $sql = "DELETE FROM producto WHERE id = :id";
    $delete = $pdo->prepare($sql);
    $delete->bindParam(":id", $id);
    if($delete->execute()){
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $delete->errorInfo()
    ];
}

// Categoria
function registrar_categoria($categoria, $id_creador) {
    global $pdo;
    $sql = "INSERT INTO categoria (categoria_nombre, id_creador) VALUES (:cat_nombre, :creador)";
    $insert = $pdo->prepare($sql);
    $insert->bindParam(':cat_nombre', $categoria);
    $insert->bindParam(':creador', $id_creador);
    if($insert->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $insert->errorInfo()
    ];
}
function traer_categorias() {
    global $pdo;
    $sql = "SELECT e.nombre, c.* FROM empleado e INNER JOIN categoria c ON e.id = c.id_creador";
    $select = $pdo->prepare($sql);
    if($select->execute()) {
        return [
            'ok' => true,
            'error' => null,
            'data' => $select->fetchAll()
        ];
    }else {
        return [
            'ok' => false,
            'error' => $select->errorInfo(),
            'data' => null
        ];
    }
}
function editar_categoria($id, $categoria) {
    global $pdo;
    $sql = "UPDATE categoria SET categoria_nombre=:categoria WHERE id=:id";
    $update = $pdo->prepare($sql);
    $update->bindParam(":categoria", $categoria);
    $update->bindParam(":id", $id);
    if($update->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $update->errorInfo()
    ];
}
function eliminar_categoria($id) {
    global $pdo;
    $sql = "DELETE FROM categoria WHERE id = :id";
    $delete = $pdo->prepare($sql);
    $delete->bindParam(":id", $id);
    if($delete->execute()){
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $delete->errorInfo()
    ];
}

// Proveedor
function traer_proveedores() {
    global $pdo;
    $sql = "SELECT e.nombre, p.* FROM empleado e INNER JOIN proveedor p ON e.id = p.id_creador";
    $select = $pdo->prepare($sql);
    if($select->execute()) {
        return [
            'ok' => true,
            'error' => null,
            'data' => $select->fetchAll()
        ];
    }else {
        return [
            'ok' => false,
            'error' => $select->errorInfo(),
            'data' => null
        ];
    }
}
function registrar_proveedor($nombre, $direccion, $telefono, $creador) {
    global $pdo;
    $sql = "INSERT INTO proveedor (nombre, direccion, telefono, id_creador) VALUES (:nombre, :direccion, :telefono, :creador)";
    $insert = $pdo->prepare($sql);
    $insert->bindParam(":nombre", $nombre);
    $insert->bindParam(":direccion", $direccion);
    $insert->bindParam(":telefono", $telefono);
    $insert->bindParam(":creador", $creador);
    if($insert->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $insert->errorInfo()
    ];
}
function editar_proveedor($id, $nombre, $direccion, $telefono) {
    global $pdo;
    $sql = "UPDATE proveedor SET nombre=:nombre, direccion=:direccion, telefono=:telefono WHERE id=:id";
    $update = $pdo->prepare($sql);
    $update->bindParam(":nombre", $nombre);
    $update->bindParam(":direccion", $direccion);
    $update->bindParam(":telefono", $telefono);
    $update->bindParam(":id", $id);
    if($update->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $update->errorInfo()
    ];
}

function eliminar_proveedor($id) {
    global $pdo;
    $sql = "DELETE FROM proveedor WHERE id = :id";
    $delete = $pdo->prepare($sql);
    $delete->bindParam(":id", $id);
    if($delete->execute()){
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $delete->errorInfo()
    ];
}

// Clientes
function traer_clientes() {
    global $pdo;
    $sql = "SELECT e.nombre, c.* FROM empleado e INNER JOIN cliente c ON e.id = c.id_creador";
    $select = $pdo->prepare($sql);
    if($select->execute()) {
        return [
            'ok' => true,
            'error' => null,
            'data' => $select->fetchAll()
        ];
    }else {
        return [
            'ok' => false,
            'error' => $select->errorInfo(),
            'data' => null
        ];
    }
}
function registrar_cliente($nombre, $direccion, $telefono, $dni, $tipo, $creador) {
    global $pdo;
    $sql = "INSERT INTO cliente (nombre, direccion, telefono, dni, tipo, id_creador) 
            VALUES (:nombre, :direccion, :telefono, :dni, :tipo, :creador)";
    $insert = $pdo->prepare($sql);
    $insert->bindParam(":nombre", $nombre);
    $insert->bindParam(":direccion", $direccion);
    $insert->bindParam(":telefono", $telefono);
    $insert->bindParam(":dni", $dni);
    $insert->bindParam(":tipo", $tipo);
    $insert->bindParam(":creador", $creador);
    
    if($insert->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }else {
        return [
            'ok' => false,
            'error' => $insert->errorInfo()
        ];
    }
}
function editar_cliente($id, $nombre, $direccion, $telefono, $dni, $tipo) {
    global $pdo;
    $sql = "UPDATE cliente SET nombre=:nombre, direccion=:direccion, telefono=:telefono, dni=:dni, tipo=:tipo WHERE id=:id";
    $update = $pdo->prepare($sql);
    $update->bindParam(":nombre", $nombre);
    $update->bindParam(":direccion", $direccion);
    $update->bindParam(":telefono", $telefono);
    $update->bindParam(":dni", $dni);
    $update->bindParam(":tipo", $tipo);
    $update->bindParam(":id", $id);
    if($update->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $update->errorInfo()
    ];
}
function eliminar_cliente($id) {
    global $pdo;
    $sql = "DELETE FROM cliente WHERE id = :id";
    $delete = $pdo->prepare($sql);
    $delete->bindParam(":id", $id);
    if($delete->execute()){
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $delete->errorInfo()
    ];
}

// Ventas


function traer_ventas() {
    global $pdo;
    $sql = "SELECT e.id, e.nombre AS nombreEmpleado,
    pr.id, pr.nombre AS nombreProducto, pr.cantidad AS cantidadProducto, pr.precio as precioProducto,
    cl.id, cl.nombre AS nombreCliente,
    ve.*
    FROM venta as ve
    INNER JOIN empleado as e ON e.id = ve.id_creador
    INNER JOIN producto as pr ON pr.id = ve.id_producto
    INNER JOIN cliente as cl ON cl.id = ve.id_cliente";
    $select = $pdo->prepare($sql);
    if($select->execute()) {
        return [
            'ok' => true,
            'data' => $select->fetchAll(),
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $select->errorInfo()
    ];
}

function traer_producto_venta (){
    global $pdo;
    $sql = "SELECT id, nombre FROM producto";
    $select = $pdo->prepare($sql);
    if($select->execute()) {
        return [
            'ok' => true,
            'data' => $select->fetchAll(),
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'data' => null,
        'error' => $select->errorInfo()
    ];
}
function traer_cliente_venta() {
    global $pdo;
    $sql = "SELECT id, nombre FROM cliente";
    $select = $pdo->prepare($sql);
    if($select->execute()) {
        return [
            'ok' => true,
            'data' => $select->fetchAll(),
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'data' => null,
        'error' => $select->errorInfo()
    ];
}

function registrar_venta($id_producto, $id_cliente, $cantidad, $creador) {
    global $pdo;
    $sql = "INSERT INTO venta (cantidad, fecha_salida, id_producto, id_cliente, id_creador) VALUES (:cantidad, NOW(), :id_producto, :id_cliente, :id_creador)";
    $insert = $pdo->prepare($sql);
    $insert->bindParam(":cantidad", $cantidad);
    $insert->bindParam(":id_producto", $id_producto);
    $insert->bindParam(":id_cliente", $id_cliente);
    $insert->bindParam(":id_creador", $creador);
    if($insert->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $insert->errorInfo()
    ];
}
function editar_venta($id_venta ,$id_producto, $id_cliente, $cantidad) {
    global $pdo;
    $sql = "UPDATE venta SET cantidad=:cantidad, id_producto=:id_producto, id_cliente=:id_cliente WHERE id=:id";
    $update = $pdo->prepare($sql);
    $update->bindParam(":cantidad", $cantidad);
    $update->bindParam(":id_producto", $id_producto);
    $update->bindParam(":id_cliente", $id_cliente);
    $update->bindParam(":id", $id_venta);
    if($update->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $update->errorInfo()
    ];
}
function eliminar_venta($id) {
    global $pdo;
    $sql = "DELETE FROM venta WHERE id = :id";
    $delete = $pdo->prepare($sql);
    $delete->bindParam(":id", $id);
    if($delete->execute()) {
        return [
            'ok' => true,
            'error' => null
        ];
    }
    return [
        'ok' => false,
        'error' => $delete->errorInfo()
    ];
}

function detectar_vacio(...$variables) {

    foreach($variables as $valor) {
        if (empty($valor)) {
            return false;
        }
    }

    return true;
}
?>

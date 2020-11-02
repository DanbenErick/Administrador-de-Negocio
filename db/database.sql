CREATE DATABASE almacen;

USE almacen;

CREATE TABLE Empleado (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre varchar(15) NOT NULL,
    usuario varchar(15) NOT NULL,
    pass varchar(200) NOT NULL,
    rol boolean NOT NULL
);

CREATE TABLE Proveedor (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre varchar(15) NOT NULL,
    direccion varchar(30) NOT NULL,
    telefono varchar(9) NOT NULL
);

CREATE TABLE Cliente (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre varchar(15) NOT NULL,
    direccion varchar(30) NOT NULL,
    telefono varchar(9) NOT NULL,
    dni varchar(8) NOT NULL,
    tipo int NOT NULL
);

CREATE TABLE Categoria (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    categoria_nombre varchar(30) NOT NULL
);

CREATE TABLE Producto (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre varchar(30) NOT NULl,
    fecha_ingreso date NOT NULL,
    ult_fecha_salida date NOT NULL,
    precio float NOT NULL,
    cantidad int NOT NULL,
    id_categoria int NOT NULL,
    CONSTRAINT FK_producto_categoria FOREIGN KEY (id_categoria) REFERENCES Categoria(id)
);

CREATE TABLE Producto_Ingresados (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    cantidad int NOT NULL,
    fecha_ingreso date NOT NULL,
    id_producto int NOT NULL,
    id_proveedor int NOt NULL,
    id_creador int NOT NULL,
    CONSTRAINT fk_producto_ing_producto FOREIGN KEY (id_producto) REFERENCES Producto(id),
    CONSTRAINT fk_producto_ing_proveedor FOREIGN KEY (id_proveedor) REFERENCES Proveedor(id),
    CONSTRAINT fk_producto_ing_empleado FOREIGN KEY (id_creador) REFERENCES Empleado(id)
);

CREATE TABLE Producto_Egresados (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    cantidad int NOT NULL,
    fecha_salida date NOT NULL,
    id_producto int NOT NULL,
    id_proveedor int NOT NULL,
    id_creador int NOT NULL,
    CONSTRAINT FK_productoEgre_producto FOREIGN KEY (id_producto) REFERENCES Producto(id),
    CONSTRAINT FK_productoEgre_proveedor FOREIGN KEY (id_proveedor) REFERENCES Proveedor(id),
    CONSTRAINT FK_productoEgre_empleado FOREIGN KEY (id_creador) REFERENCES Empleado(id)
);




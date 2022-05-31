CREATE TABLE IF NOT EXISTS CLIENTES(
    CLIENTE_ID INT NOT NULL AUTO_INCREMENT,
    NOMBRE VARCHAR(40) NOT NULL,
    APELLIDO VARCHAR(40) NOT NULL,
    EMAIL VARCHAR(40) NOT NULL,
    PRIMARY KEY (CLIENTE_ID)
);

CREATE TABLE IF NOT EXISTS PRODUCTOS(
    PRODUCTO_ID INT NOT NULL AUTO_INCREMENT,
    SKU VARCHAR(10) NOT NULL,
    CLASS CHAR(1) NOT NULL,
    NOMBRE VARCHAR(40) NOT NULL,
    DESCRIPCION VARCHAR(200) NOT NULL,
    IMAGEN_PATH VARCHAR(50) NOT NULL,
    PRECIO DECIMAL(8,2) NOT NULL,
    EXISTENCIA INT NOT NULL,
    VENTAS INT NOT NULL DEFAULT 0,
    PRIMARY KEY(PRODUCTO_ID)
);

CREATE TABLE IF NOT EXISTS PEDIDOS(
    PEDIDO_ID INT NOT NULL AUTO_INCREMENT,
    FOLIO VARCHAR(10) NOT NULL,
    FECHA DATETIME NOT NULL,
    COSTO DECIMAL(8,2) NOT NULL,
    CLIENTE_ID INT NOT NULL,
    PRIMARY KEY(PEDIDO_ID),
    FOREIGN KEY(CLIENTE_ID)
        REFERENCES CLIENTES(CLIENTE_ID)
);

CREATE TABLE IF NOT EXISTS PEDIDO_PRODUCTO(
    PEDIDO_PRODUCTO_ID INT NOT NULL AUTO_INCREMENT,
    CANTIDAD INT NOT NULL,
    PEDIDO_ID INT NOT NULL,
    PRODUCTO_ID INT NOT NULL,
    PRIMARY KEY(PEDIDO_PRODUCTO_ID),
    FOREIGN KEY (PEDIDO_ID)
        REFERENCES PEDIDOS(PEDIDO_ID),
    FOREIGN KEY (PRODUCTO_ID)
        REFERENCES PRODUCTOS(PRODUCTO_ID)
);

SET PERSIST information_schema_stats_expiry=0;

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000001','H','Nike chocolate y naranja',
  'Tenis Nike para hombre de color chocolate y naranja de piel GORE-TEX.',
  './imagenes/nike1.jpg', 1200.00, 40
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000002','H','Nike blanco puro con Velcro',
  'Tenis Nike para hombre blancos de piel. Cuentan una cinta velcro y agujetas.',
  './imagenes/nike2.jpg', 1060.00, 30
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000003','H','Nike Negro espacial',
  'Tenis Nike para hombre para correr color negro espacial.',
  './imagenes/nike3.jpg', 899.99, 20
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000004','H','Nike blanco Orland',
  'Tenis Nike para hombre color blanco. Estilo Orland.',
  './imagenes/nike4.jpg', 1099.79, 30
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000005','H','Nike blanco puro',
  'Tenis Nike para hombre blancos de piel. Cuenta con agujetas.',
  './imagenes/nike5.jpg', 1099.79, 40
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000006','H','Nike negros con suela.',
  'Tenis Nike para hombre de color negro. Tobillo alto y suela blanca.',
  './imagenes/nike6.jpg', 1099.79, 45
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000007','M','Nike lila.',
  'Tenis Nike deportivos para mujer de color lila.',
  './imagenes/nike7.jpg', 1099.79, 40
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000008','M','Nike para niñas blanco con rosa.',
  'Tenis Nike deportivos para niña de color blanco con rosa.',
  './imagenes/nike9.jpg', 799.79, 15
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000009','M','Nike Jordan Series blancos y rosas.',
  'Tenis Nike deportivos para mujer Jordan Series.',
  './imagenes/nike9.jpg', 1299.79, 20
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000010','M','Nike J.J.O.O.',
  'Tenis Nike edición J.J.O.O. para mujeres.',
  './imagenes/nike10.jpg', 1399.79, 5
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000011','M','Nike Rosas con soporte.',
  'Tenis deportivos Nike rosas para mujeres. Cuentan con tecnología de soporte.',
  './imagenes/nike11.jpg', 1599.79, 15
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000012','M','Nike rosas casuales.',
  'Tenis Nike casuales color rosa.',
  './imagenes/nike12.jpg', 899.79, 30
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000013','N','Nike infantiles naranjas.',
  'Tenis Nike infantiles color naranja.',
  './imagenes/nike13.jpg', 599.79, 10
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000014','N','Nike infantiles blancos.',
  'Tenis Nike infantiles blancos.',
  './imagenes/nike14.jpg', 699.79, 15
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000014','N','Nike infantiles blancos.',
  'Tenis Nike infantiles blancos.',
  './imagenes/nike14.jpg', 699.79, 15
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000015','N','Nike infantiles negros y naranja',
  'Tenis Nike infantiles negros y naranjas con Velcro.',
  './imagenes/nike15.jpg', 699.79, 10
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000016','N','Nike infantiles gris y rosas.',
  'Tenis Nike infantiles color gris y rosa.',
  './imagenes/nike16.jpg', 599.79, 20
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000017','N','Nike infantiles rosas estilo chanclas.',
  'Chanclas infantiles Nike color rosa.',
  './imagenes/nike17.jpg', 899.79, 10
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000018','C','Calcetas deportivas Nike (3)',
  'Tres pares de calcetas Nike. Color rojo, blanco y negro.',
  './imagenes/nike18.jpg', 299.79, 50
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000019','C','Calcetin deportivo Nike negro (6)',
  'Seis pares de calcetines Nike color negro.',
  './imagenes/nike19.jpg', 399.79, 50
);

INSERT INTO PRODUCTOS(SKU, CLASS, NOMBRE, DESCRIPCION, IMAGEN_PATH, PRECIO, EXISTENCIA)
  VALUES('NKE-000020','C','Calcetas deportivas Nike blancas (3)',
  'Tres pares de calcetas Nike Dri-Fit color blanco.',
  './imagenes/nike20.jpg', 199.79, 50
);


INSERT INTO CLIENTES(NOMBRE,APELLIDO,EMAIL)
  VALUES('CLINT','EASTWOOD','clinte@gmail.com');
INSERT INTO PEDIDOS(FOLIO,FECHA,COSTO,CLIENTE_ID)
  VALUES('0000000000',NOW(),0.00,1);
INSERT INTO PEDIDO_PRODUCTO(CANTIDAD,PEDIDO_ID,PRODUCTO_ID)
  VALUEs(1,1,1);
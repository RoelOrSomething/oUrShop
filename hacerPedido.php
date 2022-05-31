<?php 
	include 'db_connection.php';
	include 'display.php';
	$conn = OpenCon();

    // Se recibe un JSON mediante la petición POST
    $carrito_json = file_get_contents('php://input');    
    $carrito = json_decode($carrito_json,TRUE);
    
    // Obtener nombre, apellido e email de JSON
    $nombre = $carrito['nombre'];
    $apellido = $carrito['apellido'];
    $email = $carrito['email'];
    // Borrar nombre, apellido e email del JSON
    unset($carrito['nombre']);
    unset($carrito['apellido']);
    unset($carrito['email']);

    // Se deshabilita el autocommit
    //$conn->autocommit(FALSE);

    // Se calcula secuencialmente el precio del pedido
    $precio = 0.0;
    foreach($carrito as $id => $cantidad){
        $query = "SELECT * FROM PRODUCTOS WHERE PRODUCTO_ID=".$id;
        $selection = $conn->query($query);
        $producto = mysqli_fetch_assoc($selection);
        $precioTotPro = $cantidad * $producto['PRECIO'];
        $precio = $precio + $precioTotPro;
    }

    // Se obtiene el siguiente ID de tabla CLIENTES
    $query = "SELECT AUTO_INCREMENT 
        FROM information_schema.TABLES
        WHERE TABLE_SCHEMA = 'ourshoes'
        AND TABLE_NAME = 'clientes'";
    $selection = $conn->query($query);
    $id_sel = mysqli_fetch_assoc($selection);
    $id_cliente = $id_sel['AUTO_INCREMENT'];

    // Se obtiene el siguiente ID de tabla PEDIDO
    $query = "SELECT AUTO_INCREMENT
        FROM information_schema.TABLES
        WHERE TABLE_SCHEMA = 'ourshoes'
        AND TABLE_NAME = 'pedidos'";
    $selection = $conn->query($query);
    $id_sel = mysqli_fetch_assoc($selection);
    $id_pedido = $id_sel['AUTO_INCREMENT'];

    // Se inserta el cliente a la tabla CLIENTES
    $insert = "INSERT INTO CLIENTES(NOMBRE, APELLIDO, EMAIL)
        VALUES('".$nombre."','".$apellido."','".$email."')";
    
    $conn->query($insert);

    // Se calcula el folio [FECHA,PEDIDO_ID]
    $folio = date("ymd").str_pad($id_pedido,4,"0",STR_PAD_LEFT);
    echo $folio;

    // Se inserta el pedido a la tabla PEDIDOS
    $insert = "INSERT INTO PEDIDOS(FOLIO, FECHA, COSTO, CLIENTE_ID)
        VALUES('".$folio."',now(),".$precio.",".$id_cliente.")";
    $conn->query($insert);

    // Se insertan los productos del pedido a la tabla PEDIDO_PRODUCTO
    foreach($carrito as $id => $cantidad){
        $insert = "INSERT INTO PEDIDO_PRODUCTO(CANTIDAD,PEDIDO_ID,PRODUCTO_ID)
            VALUES(".$cantidad.",".$id_pedido.",".$id.")";
        $conn->query($insert);
        
        // Obtenemos existencia y ventas para actualizaralas
        $query = "SELECT EXISTENCIA,VENTAS FROM PRODUCTOS
            WHERE PRODUCTO_ID =".$id;
        $selection = $conn->query($query);
        $datos = mysqli_fetch_assoc($selection);
        $existencia = $datos['EXISTENCIA'] - $cantidad;
        $ventas = $datos['VENTAS'] + $cantidad;
        $insert = "UPDATE PRODUCTOS
            SET
              EXISTENCIA = ".$existencia.", 
              VENTAS = ".$ventas."
            WHERE PRODUCTO_ID = ".$id;

        $conn->query($insert);

        $conn->query($insert);
    }
    
    //$conn->commit;
    //$conn->autocommit(TRUE);
    
	CloseCon($conn);
?>
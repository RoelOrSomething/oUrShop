
<?php 
	include 'db_connection.php';
	include 'display.php';
	$conn = OpenCon();

		echo '<tr>
			<td>Nombre</td>
			<td>Precio unit.</td>
			<td>Cantidad</td>
			<td>Precio total</td>
		</tr>
		';

		$carrito_json = file_get_contents('php://input');
		$carrito = json_decode($carrito_json,TRUE);
		$precio = 0.0;
		foreach($carrito as $id => $cantidad){
			$query = "SELECT * FROM PRODUCTOS WHERE PRODUCTO_ID=".$id;
			$selection = $conn->query($query);
			$producto = mysqli_fetch_assoc($selection);
			$precioTotPro = $cantidad * $producto['PRECIO'];
			$precio = $precio + $precioTotPro;
			echo '<tr>
				<td>'.$producto['NOMBRE'].'</td>
				<td>'.$producto['PRECIO'].'</td>
				<td>'.$cantidad.'</td>
				<td>'.$precioTotPro.'</td>
			</tr>';
		}

		echo '<tr>
			Precio Total:'.$precio.'
		</tr>';

	CloseCon($conn);
?>


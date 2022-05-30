
<?php 
	include 'db_connection.php';
	include 'display.php';
	$conn = OpenCon();

		echo '<tr style="font-size: 20px; margin-bottom: 20px;">
		<td><div class="titulosCarrito">Nombre</div></td>
		<td><div class="titulosCarrito">Precio unitario</div></td>
		<td><div class="titulosCarrito">Cantidad</div></td>
		<td><div class="titulosCarrito">Precio total</div></td>
		</tr>';

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
				<td><div style="font-weight: bold;" class="celdaCarrito">'.$producto['NOMBRE'].'</div></td>
				<td><div class="celdaCarrito">$'.$producto['PRECIO'].'</div></td>
				<td><div class="celdaCarrito">'.$cantidad.'</div></td>
				<td><div class="celdaCarrito">$'.$precioTotPro.'</div></td>
			</tr>';
		}

		echo '
		<tr><td></td><td></td>
				<td>
				<div style="font-weight:bold; margin-bottom: 20px;">Precio total del carrito</div>
				</td>
				<td ><div style="font-weight:bold; margin-left: 30px;; width: 200px; margin-bottom: 20px;">$'.$precio.'</div></td>
		</tr>';
		

	CloseCon($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>oUrShop</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body onload="mostrarCarrito()">
	<?php 
	  include 'db_connection.php';
	  include 'display.php';
	  $conn = OpenCon();
	?>

	<div class="contenedor">
		
		<?php
			displayHeader();
		?>

		<div class="contenedorTablaCarrito">
		<div style="width: 60%; margin: 0 auto; margin-top: 10px; margin-bottom: 20px; font-size: 30px;">Tu carrito:</div>
		<table id="listarCarrito" class="tablaCarrito">
			

		</table>
		</div>



        <div>     

			<form>
				<label for="nombre">Nombre:</label>
				<input type="text" id="nombrePedido" name="nombre"><br>

				<label for="apellido">Apellido:</label>
				<input type="text" id="apellidoPedido" name="apellido"><br>

				<label for="email">Email:</label>
				<input type="text" id="emailPedido" name="email"><br>

				<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
				<label for="vehicle1">Quiero actualizaciones</label><br>

			</form>

			<div id="pedido">
				<input onclick="hacerPedido()" type="button" value="Hacer pedido">
			</div>


        </div>



	</div>
	<script src="carrito.js"></script>

	<?php 
	  CloseCon($conn);
	?>

</body>
</html>
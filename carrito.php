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

		<H2> Carrito de compras</H2>

        <div>
            
            <table id="tablaCarrito">
                
            </table>

			<form>
				<label for="nombre">Nombre:</label>
				<input type="text" id="nombrePedido" name="nombre"><br>

				<label for="apellido">Apellido:</label>
				<input type="text" id="apellidoPedido" name="apellido"><br>

				<label for="email">Email:</label>
				<input type="text" id="emailPedido" name="email"><br>

				<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
				<label for="vehicle1">Quiero actualizaciones</label><br>

				<input onclick="hacerPedido()" type="button" value="Hacer pedido">
			</form>

			<p id="resultadoPedido"> </p>


        </div>



	</div>
	<script src="carrito.js"></script>

	<?php 
	  CloseCon($conn);
	?>

</body>
</html>
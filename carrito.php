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



        <div class="contenedorFormulario">
			
			<div id="datosPedido" style="width: 60%; height: 50px; margin: 0 auto; margin-top: 20px; margin-bottom: 20px; font-size: 30px;">Ingresa tus datos:</div>
			<div class="datos">
			<form class="formulario">

				<div class="compFormulario">
					<label for="nombre">Nombre:</label>
					<div id="datoNombre"><input type="text" id="nombrePedido" name="nombre"><br></div>
				</div>

				<div class="compFormulario">
					<label for="apellido">Apellido:</label>
					<div id="datoApellido"><input type="text" id="apellidoPedido" name="apellido"><br></div>
				</div class="compFormulario">

				<div class="compFormulario">
					<label for="email">Email:</label>
					<div id="datoEmail"><input type="text" id="emailPedido" name="email"><br></div>
				</div>

				<div id="updates" style="width: 50%;height: 40px; margin-top: 10px;">
					<input type="checkbox" id="actualizaciones" name="actualizaciones" value="Bike">
					<label for="actualizaciones">Quiero actualizaciones</label><br>
				</div>

				<div id="pedido">
				<input onclick="hacerPedido()" type="button" value="Hacer pedido">
				</div>

			</form>
			</div>



        </div>



	</div>
	<script src="carrito.js"></script>

	<?php 
	  CloseCon($conn);
	?>

</body>
</html>
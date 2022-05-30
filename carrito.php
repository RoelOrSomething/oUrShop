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

        <div>
            <H2>Carrito</H2>
            <table id="tablaCarrito">
                
            </table>
        </div>

		

	</div>
	<script src="carrito.js"></script>

	<?php 
	  CloseCon($conn);
	?>

</body>
</html>
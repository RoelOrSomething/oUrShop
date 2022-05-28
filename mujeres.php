<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>oUrShop</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>
	<?php 
	  include 'db_connection.php';
	  include 'display.php';
	  $conn = OpenCon();
	?>

	<div class="contenedor">

		<?php
			
			displayHeader();

			$query = "SELECT * FROM PRODUCTOS WHERE CLASS = 'M' ORDER BY VENTAS";
			$selection = $conn->query($query);
			
			displayTable($selection);

		?>
		
	</div>
	<script src="carrusel.js"></script>
	<script src="carrito.js"></script>

	<?php 
	  CloseCon($conn);
	?>

</body>
</html>
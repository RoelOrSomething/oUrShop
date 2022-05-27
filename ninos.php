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
	  $conn = OpenCon();
	?>

	<div class="contenedor">
		
		<header>
			<nav>
				<div class="marca_logo">
					<p>oUrShop<p>
				</div>
				<ul>
					<li><a href="#">Login</a> </li>
					<li><a href="#">Sing up</a></li>
					<li><a href="#">Misión y Visión</a></li>
					<li><a href="#"><img src="./imagenes/carrito.jpg" width="25"></a></li>
				</ul>
			</nav>
		</header>

		<?php
			
			$query = "SELECT * FROM PRODUCTOS WHERE CLASS = 'N' ORDER BY VENTAS";
			$selection = $conn->query($query);
			displayTable($selection);

		?>
		
	</div>
	<script src="carrusel.js"></script>

	<?php 
	  CloseCon($conn);
	?>

</body>
</html>
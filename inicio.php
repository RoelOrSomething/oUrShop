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

		<table id="carrusel">	
		<tr>
			<td>
				<div><button onclick="preImg()" class="botonCarr" ><img src="./imagenes/last.png" class="imgCarr"></button></div>
			</td>
			<td>
				<img id="imagen" src="./imagenes/carru1.png" style="width:1000px; height: 400px; float: left;"></img>	
			</td>
			<td>	
				<div><button onclick="nextImg()" class="botonCarr"><img src="./imagenes/next.png" class="imgCarr"></button></div>
			</td>	
		</tr>
		<div id="carrusel">
					
    	</div>
    	</table>

		<?php
			
			$productosByVentasTop6 = "SELECT * FROM PRODUCTOS ORDER BY VENTAS LIMIT 6";
			$mas_vendidos = $conn->query($productosByVentasTop6);
			displayTable($mas_vendidos);

		?>
		
	</div>
	<script src="carrusel.js"></script>

	<?php 
	  CloseCon($conn);
	?>

</body>
</html>
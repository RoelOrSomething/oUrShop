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
		?>

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
			
			$productosByVentasTop6 = "SELECT * FROM PRODUCTOS ORDER BY VENTAS DESC LIMIT 6";
			$mas_vendidos = $conn->query($productosByVentasTop6);
			displayTable($mas_vendidos);

		?>
		
	</div>
	<script src="carrusel.js"></script>
	<script src="carrito.js"></script>

	<?php 
	  CloseCon($conn);
	?>

</body>
</html>
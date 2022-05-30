<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>oUrShop</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

    <?php 
	  include 'display.php';
	?>

	<div class="contenedor">
		<?php
		    displayHeader();
        ?>

            <div class="contenedorMision">
			<div class="textosMision">Misión</div>
			<div class="tex">"Traer comodiad y personalidad a cada persona que utilice nuestros productos"</div>
			<div style="width: 70%; height: 50px;"> </div>
			<div class="textosMision">Visión</div>
			<div class="tex">Ser una de las mejores lideres en venta de calzado deportivo destacándonos por diseños innovadores y comodidad a precios accesibles</div>
			<div style="width: 70%; height: 50px;"> </div>
			<div class="textosMision"><img style="width: 100%;" src="imagenes/vision.jpeg"></div>
		</div>

	</div>
	<script src="carrusel.js"></script>
</body>
</html>
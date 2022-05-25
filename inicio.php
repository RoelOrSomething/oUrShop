<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>oUrShop</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>

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
				<div><button onclick="preImg()" class="botonCarr" ><img src="last.png" class="imgCarr"></button></div>
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
		

		<table class="tablaObjetos">
			<tr>
				<td><div class="producto">
					<img src="./imagenes/nike1.jpg" class="imagenProducto">
					<div class="productoInfo">
						<p class="descripcion">Nike chocolate y naranja</p>
						<p class="precio">$1,200.00</p>
						<p>Cantidad: </p>
						<form class="cantidades">
							<input type="number" title="num" class="numProducto">
							<input type="button" name="agregar" value="Agregar" class="botonAgregar" >
						</form>
					</div>
				</div></td>
				<td><div class="producto">
					<img src="./imagenes/nike2.jpg" class="imagenProducto">
					<div class="productoInfo">
						<p class="descripcion">Nike blanco puro</p>
						<p class="precio">$1,060.00</p>
						<p>Cantidad: </p>
						<form class="cantidades">
							<input type="number" title="num" class="numProducto">
							<input type="button" name="agregar" value="Agregar" class="botonAgregar" >
						</form>
					</div>
				</div></td>
			</tr>
			<tr>
				<td><div class="producto">
					<img src="./imagenes/nike3.jpg" class="imagenProducto">
					<div class="productoInfo">
						<p class="descripcion">Nike negro espacial</p>
						<p class="precio">$899.89</p>
						<p>Cantidad: </p>
						<form class="cantidades">
							<input type="number" title="num" class="numProducto">
							<input type="button" name="agregar" value="Agregar" class="botonAgregar" >
						</form>
					</div>
				</div></td>
				<td><div class="producto">
					<img src="./imagenes/nike4.jpg" class="imagenProducto">
					<div class="productoInfo">
						<p class="descripcion">Nike blanco orland</p>
						<p class="precio">$1099.79</p>
						<p>Cantidad: </p>
						<form class="cantidades">
							<input type="number" title="num" class="numProducto">
							<input type="button" name="agregar" value="Agregar" class="botonAgregar" >
						</form>
					</div>
				</div></td>
			</tr>
		</table>
	</div>
	<script src="carrusel.js"></script>

</body>
</html>
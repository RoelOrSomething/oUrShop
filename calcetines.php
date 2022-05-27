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
			
			$query = "SELECT * FROM PRODUCTOS WHERE CLASS = 'C' ORDER BY VENTAS";
			$selection = $conn->query($query);
			$N = mysqli_num_rows($selection);
			$M = ceil($N / 2);

			echo '<table class="tablaObjetos">';
			for($i = 0; $i<$M; $i++){
				echo '<tr>';
				for($j = 0; $j<2; $j++){
					$row = mysqli_fetch_assoc($selection);
					echo '<td><div class="producto">';
						echo '<img src="'.$row['IMAGEN_PATH'].'" class="imagenProducto">';
						echo '<div class="productoInfo">';
							echo '<p class="descripcion">'.$row["NOMBRE"].'</p>';
							echo '<p class="precio">'.$row['PRECIO'].'</p>';
							echo 'Existencia:';
							echo '<p>Cantidad: </p>';
							echo '<form class="cantidades">';
								echo '<input type="number" title="num" class="numProducto">';
								echo '<input type="button" name="agregar" value="Agregar" class="botonAgregar" >';
							echo '</form>';
						echo '</div>';
					echo '</div></td>';
					$N = $N - 1;
					if($N == 0){
						break;
					}
				}
				echo '</tr>';
			}

			echo '</table>';

		?>
		
	</div>
	<script src="carrusel.js"></script>

	<?php 
	  CloseCon($conn);
	?>

</body>
</html>
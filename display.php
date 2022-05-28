<?php

    function displayHeader(){
        echo '
        <header>
            <nav>
                <div class="marca_logo"> 
                    <a href="./inicio.php">
                    <p>oUrShop<p>
                </div>
                <ul>
                    <li><a href="#">Misión y Visión</a></li>
                    <li><a href="#"><img src="./imagenes/carrito.jpg" width="25"></a></li>
                </ul>
            </nav>
         </header>

        <div class="contenedorCintaMenu"><div class="cintaMenu">
            <table>
                <tr>
                    <td> <a href="./hombres.php"> <div>Hombres</div></td>
                    <td> <a href="./mujeres.php"> <div>Mujeres</div></td>
                    <td> <a href="./ninos.php"> <div>Infantes</div></td>
                    <td> <a href="./calcetines.php"> <div>Calcetines</div></td>
                </tr>
            </table>
        </div></div>
        ';
    }

    function displayTable($selection){
        $N = mysqli_num_rows($selection);
        $M = ceil($N / 2);
        echo '<table class="tablaObjetos">';
        for($i = 0; $i<$M; $i++){
            echo '<tr>';
            for($j = 0; $j<2; $j++){
                $row = mysqli_fetch_assoc($selection);
                echo '<td><div class="producto">
                    <img src="'.$row['IMAGEN_PATH'].'" class="imagenProducto">
                    <div class="productoInfo">
                        <p class="descripcion">'.$row["NOMBRE"].'</p>
                        <p class="sku"> SKU: '.$row["SKU"].' </p>
                        <p class="precio"> $'.$row['PRECIO'].'</p>
                        <p>Existencia: '.$row['EXISTENCIA'].' </p>
                        <p>Cantidad: </p>
                        <form class="cantidades">
                            <input type="number" title="num" class="numProducto">
                            <input type="button" name="agregar" value="Agregar" class="botonAgregar" >
                        </form>
                    </div>
                </div></td>';
                $N = $N - 1;
                if($N == 0){
                    break;
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }  
?>
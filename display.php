<?php
    function displayTable($selection){
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
                        echo '<p class="precio"> $'.$row['PRECIO'].'</p>';
                        echo '<p>Existencia: '.$row['EXISTENCIA'].' </p>';
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
    }  
?>
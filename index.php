<?php
    include 'db_connection.php';
    $conn = OpenCon();
    echo "Connected Successfully";
    
    $sql = "SELECT SKU FROM PRODUCTOS ORDER BY SKU";
    $mas_vendidos = $conn->query($sql);

    if($mas_vendidos->num_rows > 0){
        echo "Varios";
        while($row = $mas_vendidos->fetch_assoc()){
            echo "sku: ". $row["SKU"];
        }
    }else{
        echo "Ninguno";
    }

    CloseCon($conn);
?>
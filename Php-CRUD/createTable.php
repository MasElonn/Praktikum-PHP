<?php
    require_once 'koneksi.php';

    $conn = connect();
    $query = "
        CREATE TABLE IF NOT EXISTS product(
            id INT PRIMARY KEY AUTO_INCREMENT,
            product_name VARCHAR(20) NOT NULL,
            harga INT NOT NULL
        );
    ";

    if(mysqli_query($conn, $query)){
        echo "Table created successfully";
    } else {
        echo "Table not created, Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>


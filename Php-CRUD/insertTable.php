<?php
    require_once 'koneksi.php';

    $conn = connect();

    $query = "
        INSERT INTO product (product_name, harga) VALUES
        ('Laptop', 10000000),
        ('Smartphone', 5000000), 
        ('Tablet', 3000000);
    ";

    if(mysqli_query($conn,$query)){
        echo "Data added successfully";
    } else {
        echo "Data Failed to add <br>" . mysqli_error($conn);

    }

    mysqli_close($conn);
?>


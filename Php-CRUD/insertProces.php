<?php
    require_once 'koneksi.php';

    $nama = $_GET['name'];
    $harga = $_GET['price'];

    $conn = connect();

    $query = "
        INSERT INTO product(product_name, harga) 
        VALUES ('$nama', $harga)
    ";

    if(mysqli_query($conn,$query)){
        echo "Data Added Successfully <a href='bootstrapCRUD.php'> Lihat Data </a>";
    } else {
        echo "Failed to add Data <br> Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);

?>


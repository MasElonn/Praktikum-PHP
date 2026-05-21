<?php
    require_once('koneksi.php');

    $nama = $_POST['name'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $conn = connect();

    $query = "INSERT INTO product (nama_product, merek, harga, stock) VALUES ('$nama', '$merek', '$harga', '$stock')";

    if(mysqli_query($conn, $query)){
        header("Location:index.php");
    } else {

        echo "Error adding product." . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
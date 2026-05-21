<?php
    require_once('koneksi.php');

    $id = $_GET['id'];
    $nama = $_POST['name'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $conn = connect();
    $query = "UPDATE product SET nama_product='$nama', merek='$merek', harga='$harga', stock='$stock' WHERE id_product='$id'";

    $result = mysqli_query($conn, $query);
    if($result){
        header("Location: index.php");
    } else {
        echo "Error updating product." . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

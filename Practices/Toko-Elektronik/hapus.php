<?php
    require_once ('koneksi.php');
    $id = $_GET['id'];

    $conn = connect();
    $query = "DELETE FROM product WHERE id_product = $id";

    $result = mysqli_query($conn, $query);
    if($result){
       header("Location: index.php");
    }
?>


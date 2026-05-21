<?php
    require_once 'koneksi.php';

    $id = $_GET['id'];
    $nama = $_GET['name'];
    $harga = $_GET['price'];

    $conn = connect();

    $query = "
    UPDATE product SET product_name='$nama',harga='$harga'
    WHERE id='$id'
    ";

    $result = mysqli_query($conn,$query);

    if($result){
        echo "Data Updated Successfully";

?>
    <a href="bootstrapCRUD.php"> LihatData</a>
<?php
    } else {
    echo "Failed to Update Data <br> Error: ".mysqli_error($conn);
    }
?>

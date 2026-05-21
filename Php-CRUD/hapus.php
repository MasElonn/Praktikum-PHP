<?php
    require_once 'koneksi.php';

    $id = $_GET['id'];


    $conn = connect();

    $query = "
        DELETE FROM product WHERE id='$id'
    ";

    $result = mysqli_query($conn,$query);

    if($result){
        echo "Data Deleted Successfully";

?>
    <a href="bootstrapCRUD.php"> Lihat Data </a>

<?php
    } else {
        echo "Failed to Delete the Data <br> Error: " . mysqli_error($conn);
    }

        ?>
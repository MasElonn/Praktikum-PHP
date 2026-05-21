<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    require_once 'koneksi.php';

    $conn = connect();

    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id_product='$id'";
    $result = mysqli_query($conn, $query);
?>



<form action="editProcess.php?id=<?php echo $id; ?>" method="post" >

    <h2>Edit Product</h2>

    <?php
    while($row = mysqli_fetch_array($result)){
    ?>
    <label for="name">Nama Produk</label>
        <input type="text" id="name" name="name" value="<?php echo $row['nama_product']; ?>">
    <label for="harga">Harga</label>
        <input type="number" id="harga" name="harga" value="<?php echo $row['harga']; ?>">
    <label for="merek">Merek</label>
        <input type="text" id="merek" name="merek" value="<?php echo $row['merek']; ?>">
    <label for="stock">Stok</label>
        <input type="number" id="stock" name="stock" value="<?php echo $row['stock']; ?>">


    <?php }?>


    <input type="submit" name="edit" value="Edit Data" class="button add-btn">
    <a href="index.php" class="add-btn" type="button">Kembali</a>
</form>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'koneksi.php';

        $conn = connect();

        $id = $_GET['id'];
        $query = "SELECT * FROM product WHERE id='$id'";
        $result = mysqli_query($conn, $query);
    ?>
    <table>
        <form action="processEdit.php" method="get">
            <?php
            while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> Id </td>
                <td><input type="number" name="id" value="<?php echo $row['id']; ?>" readonly></td>
            </tr>
             <tr>
                <td> Nama Product </td>
                <td><input type="text" name="name" value="<?php echo $row['product_name']; ?>"></td>
            </tr>
             <tr>
                <td> Harga </td>
                <td><input type="number" name="price" value="<?php echo $row['harga']; ?>"></td>

            </tr>
            <tr>
                <td><input type="submit" name="edit" value="Edit Data"></td>
            </tr>

            <?php
                }
            ?>

        </form>
</body>
</html>
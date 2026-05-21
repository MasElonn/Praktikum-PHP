<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <tr>
        <th> Id </th>
        <th> Nama Product </th>
        <th> Harga </th>
        <th> Aksi</th>
    </tr>
    <?php
        require_once "koneksi.php";

        $conn = connect();

        $query = "
                SELECT * FROM product
            ";

        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td> <?php echo $row['id'] ?> </td>
        <td> <?php echo $row['product_name'] ?> </td>
        <td> <?php echo $row['harga'] ?> </td>
        <td>
            <a href="editForm.php?id=<?php echo $row['id']?>" >Edit </a>
            <a href="hapus.php?id=<?php echo $row['id']?>">Hapus</a>
        </td>
        <?php
                }
            } else {
            echo "0 result";
        }

        ?>
    </tr>
</table>
</body>
</html>


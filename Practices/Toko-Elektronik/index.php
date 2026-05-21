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
<div class="container">
    <h2>Data Product</h2>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Product</th>
            <th>Merek</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
    <?php
    require_once ('koneksi.php');

    $conn = connect();

    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
    ?>

<tr>
    <td><?php echo $row['id_product']; ?></td>
    <td><?php echo $row['nama_product']; ?></td>
    <td><?php echo $row['merek']; ?></td>
    <td><?php echo $row['harga']; ?></td>
    <td><?php echo $row['stock']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id_product']?>"
        class="edit-btn">Edit </a>
        <a href="hapus.php?id=<?php echo $row['id_product']?>"
        class="delete-btn" onclick="return confirm('pakah yakin ingin hapus product')">Hapus</a>
    </td>
    <?php
        }
    } else {
        echo "0 results";
    }
    ?>
    </tr>
    </tbody>

</table>
    <a href="tambah.html" class="add-btn" style="margin: 10px 0;">Tambah Product</a>
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<header class="bg-primary py-4 mb-4">
    <div class="container">
        <h1 class="display-5 text-white" >Data Product</h1>
    </div>
</header>

<div class="container">

    <a href="insertForm.html" class="btn btn-success mb-3">
        + Tambah Data
    </a>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th> Id </th>
            <th> Nama Product </th>
            <th> Harga </th>
            <th> Aksi</th>
        </tr>
    </thead>
    <tbody>
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
            <a href="editForm.php?id=<?php echo $row['id']?>"
            class="btn btn-warning btn-sm">Edit</a>
            <a href="hapus.php?id=<?php echo $row['id']?>"
            class="btn btn-danger btn-sm"
            onclick="return confirm('Yakin hapus data?')">Hapus</a>
        </td>
        <?php
            }
            } else {
            echo "<tr> <td colspan='4'>0 result</td></tr>";
        }

        ?>
    </tr>
    </tbody>
</table>
</div>
    <script src="js/bootstrap.js"></script>
</body>
</html>


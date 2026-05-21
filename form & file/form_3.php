<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_GET["error"])){
            $error=$_GET["error"];
        } else {
            $error="";
        }
    $pesan="";
    if($error=="variabel_belum_diset"){
        $pesan="Anda harus mengakses halaman ini dari form_2.php";
    } else if ($error=="nama_kosong"){
        $pesan="Nama harus di isi";
    } else if ($error=="email_kosong"){
        $pesan="Email harus di isi";
    }
    if($error=="email_invalid"){
        $pesan="Email tidak valid";
    }
    if (isset($_GET['nama']) AND isset($_GET['email'])){
        $nama=$_GET['nama'];
        $email=$_GET['email'];
        $komentar=$_GET['komentar'];
    } else{
        $nama="";
        $email="";
        $komentar="";
    }
    ?>

    <span class="error"><?php echo $pesan?></span>

    <table>
        <form action="prosesForm_3.php" method="get">
            <tr>
                <td>Nama: </td>
                <td><input type="text" name="nama" value="<?php echo $nama?>">
            </tr>
            <tr>
                <td> E-Mail: </td>
                <td><input type="text" name="email" value="<?php echo $email?>">
            </tr>
            <tr>
                <td> Komentar:</td>
                <td><textarea name="komentar" cols="30" rows="5"><?php echo $komentar;?>
                    </textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Kirim"></td>
            </tr>
        </form>
    </table>
</body>
</html>


<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
if(!isset($_SESSION['login']) || !$_SESSION['login']){
    header("Location: index.php?p=Silahkan Login terlebih dahulu");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <?php include 'navigasi.php';?>
    <div id="main">
        <div class="container">
            <h2>APLIKASI MANAJEMEN DATA SISWA</h2>
            <hr>
            <p>Selamat datang di aplikasi Data Siswa SMKS PGRI 3 Malang</p>
            <div style="justify-content: space-between; display: flex;gap: 20px">
            <?php
                date_default_timezone_set('Asia/Jakarta');
                $jam = (int)date('G');
                echo "<a>" . date('d-m-Y') . "</a>";


                if ($jam >= 4 && $jam < 10) {
                    echo "<a>Selamat pagi</a>";
                } elseif ($jam >= 10 && $jam < 15) {
                    echo "<a>Selamat siang</a>";
                } elseif ($jam >= 15 && $jam < 18) {
                    echo "<a>Selamat sore</a>";
                } else {
                    echo "<a>Selamat malam</a>";
                }


            ?>
            </div>
        </div>
    </div>
</body>
</html>


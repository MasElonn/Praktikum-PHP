<?php
session_start();
require_once "koneksi.php";

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header("Location: index.php?p=Silahkan Login terlebih dahulu");
    exit();
}

$koneksi = getKoneksi();
$error = "";

if (isset($_POST['submit'])) {
    $kd_prodi   = $_POST['kd_prodi'];
    $nama_prodi = $_POST['nama_prodi'];

    $cek = mysqli_query($koneksi, "SELECT * FROM prodi WHERE nama_prodi='$nama_prodi'");
    if (mysqli_num_rows($cek) > 0) {
        $error = "Nama Prodi sudah digunakan";
    } else {
        mysqli_query($koneksi, "INSERT INTO prodi (kd_prodi, nama_prodi)
                                VALUES ('$kd_prodi', '$nama_prodi')");
        header("Location: prodi.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Prodi</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php include "navigasi.php"; ?>
<div id="main">
    <div class="container">
        <h2>Tambah Data Prodi</h2>
        <hr>
        <?php if ($error): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <label>Kode Prodi</label><br>
            <input type="text" name="kd_prodi" required><br><br>
            <label>Nama Prodi</label><br>
            <input type="text" name="nama_prodi" required><br><br>
            <button type="submit" name="submit" class="submit">SIMPAN</button>
            <a href="prodi.php" class="batal">BATAL</a>
        </form>
    </div>
</div>
</body>
</html>

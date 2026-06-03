<?php
session_start();
require_once "koneksi.php";

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header("Location: index.php");
    exit();
}

$koneksi = getKoneksi();
$id_prodi = $_GET['id_prodi'];

$query = mysqli_query($koneksi, "SELECT * FROM prodi WHERE id_prodi='$id_prodi'");
$data  = mysqli_fetch_assoc($query);
$error = "";

if (isset($_POST['update'])) {
    $kd_prodi   = $_POST['kd_prodi'];
    $nama_prodi = $_POST['nama_prodi'];

    mysqli_query($koneksi, "UPDATE prodi SET
        kd_prodi='$kd_prodi',
        nama_prodi='$nama_prodi'
        WHERE id_prodi='$id_prodi'");
    header("Location: prodi.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Prodi</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php include "navigasi.php"; ?>
<div id="main">
    <div class="container">
        <h2>Edit Data Prodi</h2>
        <hr>
        <?php if ($error): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="">Kode Prodi</label><br>
            <input type="text" name="kd_prodi" value="<?php echo $data['kd_prodi']; ?>" required><br><br>
            <label for="">Nama Prodi</label><br>
            <input type="text" name="nama_prodi" value="<?php echo $data['nama_prodi']; ?>" required><br><br>
            <button type="submit" name="update" class="submit">UPDATE</button>
            <a href="prodi.php" class="batal" >BATAL</a>
        </form>

    </div>
</div>
</body>
</html>

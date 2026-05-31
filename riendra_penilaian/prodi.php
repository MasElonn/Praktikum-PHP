<?php
    session_start();
    header("Cache-control: no-store, no-cache, must-revalidate, max-age=0");
    if(!isset($_SESSION['login']) || !$_SESSION['login']){
        header("Location: index.php?p=Silahkan Login terlebih dahulu $_SESSION[login]");
        exit();
    }
    require_once "koneksi.php";
    $koneksi = getKoneksi();
    $data = mysqli_query($koneksi, "SELECT * FROM prodi");
?>
<!doctype html>
<html lang="en">
<head>

    <title>Data Prodi</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <?php include 'navigasi.php'; ?>
    <div id="main">
        <div class="container">
            <h2>Data Prodi</h2>
            <hr>
            <a href="tambah_prodi.php" class="tambah">Tambah Data Prodi</a>
            <br><br>
            <table>
                <tr>
                    <th>Kode Prodi</th>
                    <th>Nama Prodi</th>
                    <th>ACTION</th>
                </tr>
                <tr>
                    <?php while($row = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                        <td><?php echo $row['kode_prodi']; ?></td>
                        <td><?php echo $row['nama_prodi']; ?></td>
                        <td>
                            <a href="edit_prodi.php?id=<?php echo $row['id']; ?>" class="edit">EDIT</a>
                            <a href="hapus_prodi.php?id=<?php echo $row['id']; ?>" class="hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">HAPUS</a>
                        </td>
                    </tr>
                    <?php } ?>

            </table>
        </div>
    </div>

</body>
</html>


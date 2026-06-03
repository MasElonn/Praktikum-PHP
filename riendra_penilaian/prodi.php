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

    $search = "";
    if(isset($_GET['search'])){
        $search = $_GET['search'];
        $data = mysqli_query($koneksi, "SELECT * FROM prodi WHERE kd_prodi LIKE '%$search%' OR nama_prodi LIKE '%$search%'");
    } else {
        $data = mysqli_query($koneksi, "SELECT * FROM prodi");
    }
?>
<!doctype html>
<html lang="en">
<head>

    <title>Data Prodi</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php include "navigasi.php"; ?>
<div id="main">
    <div class="container">
        <h2>Data Prodi</h2>
        <hr>
        <?php if (isset($_GET['p'])): ?>
            <p style="color:red;"><?php echo $_GET['p']; ?></p>
        <?php endif; ?>


        <form method="GET">
            <input  type="text" name="search" placeholder="Cari berdasarkan kode atau nama prodi..." value="<?php echo $search; ?>">
            <button style="width: 27%" type="submit" class="submit">CARI</button>
            <a href="tambah_prodi.php" class="tambah">TAMBAH DATA PRODI</a>
        </form>


        <table>
            <tr>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>ACTION</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?php echo $row['kd_prodi']; ?></td>
                <td><?php echo $row['nama_prodi']; ?></td>
                <td>
                    <a href="edit_prodi.php?id_prodi=<?php echo $row['id_prodi']; ?>">EDIT</a> |
                    <a href="hapus_prodi.php?id_prodi=<?php echo $row['id_prodi']; ?>"
                       onclick="return confirm('Yakin ingin hapus?')">DELETE</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
</body>
</html>


<?php
session_start();
require_once "koneksi.php";

$koneksi = getKoneksi();

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header("Location: index.php?p=Silahkan Login terlebih dahulu");
    exit();
}

// ambil data siswa + prodi (JOIN)
    $search = "";
    if(isset($_GET['search'])){
        $search = $_GET['search'];
        $data = mysqli_query($koneksi, "
        SELECT m.*, p.nama_prodi
        FROM siswa m                    
        JOIN prodi p ON m.kd_prodi = p.kd_prodi
        WHERE m.nis LIKE '%$search%' OR m.nama LIKE '%$search%' OR p.nama_prodi LIKE '%$search%'
    ");
    } else {
        $data = mysqli_query($koneksi, "
        SELECT m.*, p.nama_prodi
        FROM siswa m
        JOIN prodi p ON m.kd_prodi = p.kd_prodi
    ");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php include "navigasi.php"; ?>
<div id="main">
    <div class="container">
        <h2>Data Siswa</h2>
        <hr>

        <?php if (isset($_GET['p'])): ?>
            <p style="color:red;"><?php echo $_GET['p']; ?></p>
        <?php endif; ?>

        <br>
        <form method="GET">
            <input type="text" name="search" placeholder="Cari berdasarkan NPM, nama, atau prodi..." value="<?php echo $search; ?>">
            <button style="width: 27%" type="submit" class="submit">CARI</button>
            <a href="tambah_siswa.php" class="tambah">TAMBAH DATA SISWA</a>
        <table>
            <tr>
                <th>Profile</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tahun Ajaran</th>
                <th>Prodi</th>
                <th>ACTION</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td>
                    <img src="uploads/<?php echo $row['foto']; ?>"
                         width="50" height="50"
                         style="border-radius:50%; object-fit:cover;">
                </td>
                <td><?php echo $row['nis']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kelas']; ?></td>
                <td><?php echo $row['tahun_ajaran']; ?></td>
                <td><?php echo $row['nama_prodi']; ?></td>
                <td>
                    <a href="edit_siswa.php?id=<?php echo $row['id']; ?>">EDIT</a> |
                    <a href="hapus_siswa.php?id=<?php echo $row['id']; ?>"
                       onclick="return confirm('Yakin ingin hapus?')">DELETE</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
</body>
</html>

<?php
session_start();
require_once "koneksi.php";
$koneksi = getKoneksi();

$prodi = mysqli_query($koneksi, "SELECT * FROM prodi");
$error = "";

if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $tahun_ajaran  = $_POST['tahun_ajaran'];
    $kd_prodi = $_POST['kd_prodi'];
    $jk = $_POST['jenis_kelamin'];

    if (empty($nis) || empty($nama)) {
        $error = "Data wajib diisi!";
    } else {
        // upload foto
        $foto = "default.jpg";
        if (!empty($_FILES['foto']['name'])) {
            $foto = time() . "_" . $_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $foto);
        }

        mysqli_query($koneksi, "INSERT INTO siswa
    (nis, nama, kelas, tahun_ajaran, kd_prodi, jenis_kelamin, foto)
    VALUES ('$nis','$nama','$kelas','$tahun_ajaran','$kd_prodi','$jk','$foto')");
        header("Location: siswa.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php include "navigasi.php"; ?>
<div id="main">
    <div class="container">
        <h2>Tambah Data Siswa</h2>
        <hr>
        <?php if ($error): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="nis" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td>Tahun Ajaran</td>
                    <td><input type="text" name="tahun_ajaran"></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>
                        <select name="kd_prodi" required>
                            <?php while ($p = mysqli_fetch_assoc($prodi)) { ?>
                                <option value="<?php echo $p['kd_prodi']; ?>">
                                    <?php echo $p['nama_prodi']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L"> Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td><input type="file" name="foto" accept="image/*"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="simpan" class="submit">SUBMIT</button>
                        <a href="siswa.php" class="batal">BATAL</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>

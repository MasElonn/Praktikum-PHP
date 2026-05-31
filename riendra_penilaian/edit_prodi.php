<?php
    session_start();
    require_once "koneksi.php";
    $id_prodi = $_GET['id_prodi'];
    $koneksi = getKoneksi();
    $query = mysqli_query($koneksi, "SELECT * FROM prodi WHERE id_prodi = '$id_prodi'");
    $data = mysqli_query($koneksi, $query);
    $error = "";
    if(isset($_POST['update'])){

        $kd_prodi = $_POST['kd_prodi'];
        $nama_prodi = $_POST['nama_prodi'];

        $query = mysqli_query($koneksi, "UPDATE prodi
        SET kd_prodi='$kd_prodi', nama_prodi='$nama_prodi' 
        WHERE id='$id_prodi'");
        header("Location: prodi.php");
        exit();

    }
?>
<form action="" method="post">
    <label for="">Kode Prodi</label><br>
    <input type="text" name="kd_prodi" value="<?php echo $data['kd_prodi']; ?>" required>
    <label for="">Nama Prodi</label><br>
    <input type="text" name="nama_prodi" value="<?php echo $data['nama_prodi']; ?>" required>
    <button type="submit" name="update" class="update">UPDATE</button>
    <a href="prodi.php" class="batal">BATAL</a>
    
    
</form>

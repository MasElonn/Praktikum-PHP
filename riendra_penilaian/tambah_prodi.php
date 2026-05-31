<?php
    session_start();
    require_once "koneksi.php";
    $koneksi = getKoneksi();
    $error = "";

    if(isset($_POST['submit'])){
        $kd_prodi = $_POST['kd_prodi'];
        $nama_prodi = $_POST['nama_prodi'];

        $cek = mysqli_query($koneksi, "SELECT * FROM prodi WHERE nama_prodi='$nama_prodi'");
        if(mysqli_num_rows($cek) > 0){
            $error = "Nama Prodi sudah digunakan";
        } else{
            $query = mysqli_query($koneksi, "INSERT INTO prodi (kd_prodi, nama_prodi) VALUES ('$kd_prodi', '$nama_prodi')");
            
                header("Location: prodi.php");
        }
    }
?>
<form action="" method="post">
    <label for="">Kode Prodi</label><br>
    <input type="text" name="kd_prodi" required><br><br>
    <label for="">Nama Prodi</label><br>
    <input type="text" name="nama_prodi" required><br><br>
    <button type="submit" name="submit" class="submit">SIMPAN</button>
    <a href="prodi.php" class="batal">BATAL</a>

</form>
<?php
    session_start();
    require_once "koneksi.php";
    $id_prodi = $_GET['id_prodi'];
    $koneksi = getKoneksi();

    $query = mysqli_query($koneksi, "SELECT * FROM prodi WHERE id_prodi='$id_prodi'");
    $data = mysqli_fetch_assoc($query);
    $kd_prodi = $data['kd_prodi'];

$q  = mysqli_query($koneksi, "SELECT * FROM prodi WHERE id_prodi='$id_prodi'");
$dp = mysqli_fetch_assoc($q);
$kd_prodi = $dp['kd_prodi'];

$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE kd_prodi='$kd_prodi'");
if (mysqli_num_rows($cek) > 0) {
    header("location: prodi.php?p=Data tidak bisa dihapus karena masih digunakan!");
} else {
    mysqli_query($koneksi, "DELETE FROM prodi WHERE id_prodi='$id_prodi'");
    header("location: prodi.php");
}
exit();
?>


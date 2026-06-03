<?php
session_start();
require_once "koneksi.php";
$koneksi = getKoneksi();

$id  = $_GET['id'];
$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$data = mysqli_fetch_assoc($cek);

if (!$data) {
    header("Location: siswa.php?p=Data tidak ditemukan!");
    exit();
}

$hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");
if ($hapus) {
    header("Location: siswa.php?p=Data berhasil dihapus!");
    exit();
} else {
    header("Location: siswa.php?p=Gagal menghapus data!");
    exit();
}
?>

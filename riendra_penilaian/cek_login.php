<?php
session_start();
require_once "koneksi.php";
$koneksi = getKoneksi();
$username = $_POST['username'];
$password = $_POST['password'];

$password_md5 = md5($password);

$query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$username' AND password='$password_md5'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    header("Location: home.php");
    echo $password . $password_md5;
} else{
    header("Location: index.php?p=Username atau Password Salah");
}
?>


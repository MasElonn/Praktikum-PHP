<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "riendra_penilaian";

function getKoneksi()
{
    global $host, $username, $password, $database;
    $koneksi = mysqli_connect($host, $username, $password, $database);
    if(!$koneksi){
        die("Koneksi gagal") . mysqli_connect_error();
    }
    return $koneksi;
}
?>


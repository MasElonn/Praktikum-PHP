<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "toko_elektronik";

    function connect(){
        global $host, $username, $password, $database;

        $connect = mysqli_connect($host, $username, $password, $database);
        if (!$connect) {
            die("Koneksi gagal" . mysqli_connect_error());
        }
        return $connect;
    }
?>
<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "prakwebdb";

    function connect() {
        global $hostname, $username, $password, $database;

        $connect = mysqli_connect($hostname, $username, $password, $database);

        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $connect;
    }
?>
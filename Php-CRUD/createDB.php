<?php
    require_once 'koneksi.php';

    $conn = connect();
    $query = "CREATE DATABASE IF NOT EXISTS prakwebdb";

    if(mysqli_query($conn, $query)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
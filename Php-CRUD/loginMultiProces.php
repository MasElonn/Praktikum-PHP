<?php
    require_once "koneksi.php";
    $conn = connect();
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "
        SELECT * FROM user WHERE username = '$username' 
                             AND password = '$password'
        
        ";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == '1'){
        echo "Anda berhasil login";
        ?>

        <a href="homeAdmin.html"> Halaman admin </a>

        <?php
    } else if($row['level'] == '2'){
        echo "Anda berhasil login";
        ?>

        <a href="homeGuest.html">Halaman Home</a>

        <?php
    }else {
        header("Location: loginForm.php?error=1");
        ?>
        <a href="loginForm.php">Login Kembali</a>

        <?php
        echo mysqli_error($conn);
    }

?>



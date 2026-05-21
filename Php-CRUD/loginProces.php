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
    $cek = mysqli_num_rows($result);

    if($cek > 0){
        echo "Anda berhasil login";
        ?>
        <a href="homeAdmin.html"> Halaman Home </a>

    <?php
    }else {
        header("Location: loginForm.php?error=1");
        echo "Username atau Password salah".$password;?>
        <a href="loginForm.php">Login Kembali</a>
    <?php
        echo mysqli_error($conn);
        }

    ?>



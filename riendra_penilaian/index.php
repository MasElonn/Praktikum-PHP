<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header("Location: home.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Sistem Manajemen Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Panel Login</h2>
        <hr>
        <?php if (isset($_GET['p'])): ?>
            <p style="color:red;"><?php echo $_GET['p']; ?></p>
        <?php endif; ?>
        <form action="cek_login.php" method="post">
            <div class="form-control">
                <input class="input" type="text" name="username" placeholder="Masukan Username">
            </div>
            <div class="form-control">
                <input class="input" type="password" name="password" placeholder="Masukan password">
            </div>
            <div class="form-control">
                <button style="width: 100%" class="submit" type="submit">LOGIN</button>
            </div>
        </form>
    </div>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET["myname"]) && isset($_GET["myaddress"])){
        echo "Selamat Datang " . $_GET["myname"] . " !! <br>";
        echo "Dari " . $_GET["myaddress"];
    } else {
        echo "Anda harus mengakses dari form_1.html";
    }

    ?>
</body>
</html>


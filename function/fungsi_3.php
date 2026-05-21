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
    <h2>Fungsi Menghitung Luas Lingkaran</h2>
    <?php
        echo "Luas Lingkaran dengan jari-jari 7cm " . luas_Lingkaran(7). " cm";

        function luas_lingkaran($jari2){
            return 3.14*$jari2*$jari2;
        }
    ?>
</body>
</html>
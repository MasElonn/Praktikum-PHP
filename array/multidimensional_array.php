<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multidimension array</title>
</head>
<body>
    <?php
        $mobil = array(
            array("Toyota", "AG 1234 pp", "biru"),
            array("Honda", "AG 4321 pp", "merah"),
            array("Suzuki", "AG 5678 pp", "hitam")
        );

        echo "ini mobil saya " . $mobil[0][0];
        echo "<br> ini plat saya " . $mobil[1][1];
        echo "<br> ini warna mobil saya " . $mobil[2][2];
    ?>
</body>
</html>
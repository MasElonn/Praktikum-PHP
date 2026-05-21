<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assosiative array</title>
</head>

<body>
    <?php
        $mobil = array(
            'merk' => 'Toyota',
            'plat' => 'AG 1234 pp',
            'warna' => 'biru'
        );

    echo "ini mobil saya " . $mobil['merk'];
    echo "<br> ini plat saya " . $mobil['plat'];
    echo "<br> ini warna mobil saya " . $mobil['warna'];
    ?>
</body>
</html>


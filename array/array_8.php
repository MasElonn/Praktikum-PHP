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
        $age = array(
            "Joe" => "25",
            "Bambang" => "27",
            "Torvalds" => "24",
            "Olaf" => "28",
            "Ana" => "22"
        );

        ksort($age);
        foreach($age as $name => $value){
            echo "name = ".$name.", age = ".$value."<br>";
        }
    ?>
</body>
</html>
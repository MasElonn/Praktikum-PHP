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
    <h2>Sorting Array</h2>
    <?php
        $numbers = array(1,42,4,3,8,12,77,20,44,);
        sort($numbers);

        $arrLength = count($numbers);

        for($x = 0; $x < $arrLength; $x++){
            echo $numbers[$x] . "<br>";
        } ?>
</body>
</html>

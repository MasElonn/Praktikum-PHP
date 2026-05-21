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
        function familyName($fname, $year){
            echo "$fname Refsnes. Born in $year<br>";
        }

        familyName("Hege", 1945);
        familyName("Stale", 1977);
        familyName("Jim Carrey", 1995);
    ?>
</body>
</html>
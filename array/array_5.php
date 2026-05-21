<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Multidimensional Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
    <?php
        $movie = array(
            array("Avengers Infinity war", 2018,8.7),
            array("The Avengers",2012,9.1),
            array("Guardians of the Galaxy",2014,9.1)
        );
        echo "<tr>";
            echo "<td>" . $movie[0][0] . "</td>";
            echo "<td>" . $movie[0][1] . "</td>";
            echo "<td>" . $movie[0][2] . "</td>";
        echo "</tr>";   
        
        echo "<tr>";
            echo "<td>" . $movie[1][0] . "</td>";
            echo "<td>" . $movie[1][1] . "</td>";
            echo "<td>" . $movie[1][2] . "</td>";
        echo "</tr>";
            
        echo "<tr>";
            echo "<td>" . $movie[2][0] . "</td>";
            echo "<td>" . $movie[2][1] . "</td>";
            echo "<td>" . $movie[2][2] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>" . $movie[3][0] . "</td>";
            echo "<td>" . $movie[3][1] . "</td>";
            echo "<td>" . $movie[3][2] . "</td>";
        echo "</tr>";

    ?>
</body>
</html>

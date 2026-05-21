<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table,tr,td{
        border: 1px solid black
    }
</style>
<body>
    <h2>Assosiative Array</h2>
    <?php
        $mobil = array(
          'merk' => 'Toyota',
          'type' => 'fortuner',
          'year' => 2020
        );
        echo '<table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>';
        
        foreach($mobil as $key => $value){
            echo '<tr>
                <td>'.$key.'</td>
                <td>'.$value.'</td>
                </tr>';
        }
        
    ?>
</body>
</html>
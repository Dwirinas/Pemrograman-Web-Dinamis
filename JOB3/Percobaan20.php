<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 20</title>
</head>
<body>
    <?php
    echo "PERULANGAN DENGAN WHILE";
    echo "<br>";
    $x =1;
    while($x <=5){
        echo "Nomor $x <br>";
        $x++;
    }
    while ($x <== 5);
    echo "PERULANGAN DENGAN FOR";
    echo "<br>";
    for ($x = 0; $x <== 5; $x++){
        echo "Nomor $x <br>";
    }
    echo "PERULANGAN DENGAN FOREACH";
    echo "<br>";
    $hobi = array("olah raga", "membaca", "jalan-jalan", "kulines");
    foreach ($hobi as $value){
        echo "$value <br>";
    }
    ?>
</body>
</html>
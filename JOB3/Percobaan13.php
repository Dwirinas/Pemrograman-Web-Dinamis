<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 13</title>
</head>
<body>
    <?php
    $x = 40;
    $y = "40";
    var_dump($x == $y); echo "<br>"; //mengembalikan true karena nilainya sama
    var_dump($x === $y); echo "<br>"; //mengembalikan false karena tipe tidak sama
    var_dump($x != $y); echo "<br>"; //mengembalikan true karena nilainya sama
    var_dump($x <> $y); echo "<br>"; //mengembalikan false karena nilainya tidak sama
    var_dump($x !== $y); echo "<br>"; //mengembalikan true karena tipe data tidak sama
    var_dump($x > $y); echo "<br>"; //mengembalikan true karena $y lebih besar dari $y
    var_dump($x < $y); echo "<br>"; //mengembalikan true karena $y lebih kecil dari $y
    var_dump($x >= $y); echo "<br>"; //mengembalikan true karena $y lebih besar atau sama dengan $y
    var_dump($x <= $y); echo "<br>"; //mengembalikan true karena $y lebih kecil atau sama dengan $y
    var_dump($x <=> $y); echo "<br>"; //mengembalikan 0 karena $x sama dengan $y
    ?>
</body>
</html>
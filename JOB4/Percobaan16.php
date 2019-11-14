<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 16</title>
</head>
<body>
    <?php
    $warna = array("Hijau", "Biru", "Merah", "Kuning", "Ungu", "Coklat")
    sort($warna); //Urutan dari depan (Ascending)
    $panjang_array = count($warna);
    
    for($x = 0; $x < $panjang_array; $x++){
        echo $warna[$x];
        echo "<br>";
    }
    echo "<br>";

    rsort($warna);//urutan dari belakang(Descending)
    for($x = 0; $x < $panjang_array; $x++){
        echo $warna[$x];
        echo "<br>";
    }
    ?>
</body>
</html>
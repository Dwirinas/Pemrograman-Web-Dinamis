<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 14</title>
</head>
<body>
    $warna = array(1 => "Merah", 2 => "Hijau", 3=> "Kuning", 4=>"Biru");
    $warna[]="Coklat";
    $warna[6]="Putih";
    unset($warna[2]);
    print_r($warna);
</body>
</html>
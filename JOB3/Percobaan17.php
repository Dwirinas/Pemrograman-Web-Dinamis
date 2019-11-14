<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 17/title>
</head>
<body>
    <?php
    $suhu=20;
    //KONDISI DENGAN MENGGUNAKAN IF ELSE
    if($suhu<= 20){
        echo "Suhu Sejuk";
    } else if($suhu>20 AND $suhu <=27){
        echo "Suhu Biasa";
    }
    else {
        echo "Udara Panas";
    }
    echo "<br>";
    //KONDISI DENGAN MENGGUNSKSN SWITCH
    switch ($suhu){
        case 20:
            echo "Suhu Sejuk";
            break;
        case 25:
            echo "SUhu Biasa";
            break;
        case 30:
            echo "Suhu Panas";
            break;
        default:
            echo "Suhu tidak terdeteksi"
    }
    ?>
</body>
</html>
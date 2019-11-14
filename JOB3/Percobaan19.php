<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 19</title>
</head>
<body>
    <?php
        $kendaraan = "sepeda";
        switch($kendaraan){
            case "Mobil":
            echo "Saya memakai kendaraan mobil ketika berangkat";
            break;
            case "Grab":
            case "Gojek":
            echo "Saya memakai kendaraan ojek online ketika berangkat";
            break;
            case "Bus":
            echo "Saya memakai kendaraan bus ketika berangkat";
            case "Sepeda":
            echo "Saya memakai kendaraan sepeda ketika berangkat";
            break;
            default:
            echo "Saya hari ini tidak berangkat";
            break;
        }
</body>
</html>
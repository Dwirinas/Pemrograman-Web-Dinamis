<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 7</title>
</head>
<body>
    <?php
    class function hidupkan_laptop($pemilik, $merk){
        return "Hidupkab Laptop $merk punya $pemilik";
    }
    //buat objek dari class laptop(instansiasi)
    $laptop_rina = new laptop();
    echo $laptop_rina->hidupkan_laptop("Rina", "HP");
    //hasil: "Hidupkan Laptop HP punya Rina
    ?>
</body>
</html>
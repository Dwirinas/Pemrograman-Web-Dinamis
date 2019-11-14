<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 8</title>
</head>
<body>
    <?php
    //buat class laptop
    class laptop{
        //buat method untuk class laptop
        public function hidupkan_laptop($pemilik="Dwi", $merk="Samsung"){
            return "Hidupkan Laptop $merk punya $pemilik";
        }
    }
    //buat objek dari claa laptop (instansiasi)
    $laptop_rina = new laptop();
    echo $laptop_rina-> hidupkan_laptop();
    //hasil: "Hidupkan LAptop Samsung punya Dwi";
    echo "<br />";
    echo $laptop_rina->hidupkan_laptop("Rina", "HP");
    //hasil: "Hidupkan HP punya Rina";    ?>
</body>
</html>
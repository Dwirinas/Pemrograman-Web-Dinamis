<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 4</title>
</head>
<body>
    <?php
    //buat class laptop
    class laptop{
        //buat property untuk class laptop
        var $pemilik;
        //buat method untuk class laptop
        function hidupkan_laptop(){
            return "Hidupkan Laptop";
        }
    }
    //buat objek dari class laptop(instansiasi)
    $laptop_rina = new laptop();
    $laptop_dwi = new laptop();
    $laptop_chan = new laptop();

    //set property
    $laptop_rina->pemilik="Rina";
    $laptop_dwi->pemilik="Dwi";
    $laptop_chan->pemilik="Chan";

    //tampilkan property
    echo $laptop_rina->pemilik; //Rina
    echo "<br />";
    echo $laptop_dwi->pemilik; //Dwi
    echo"<br />";
    echo $laptop_chan->pemilik; //Chan
    echo "<br />"
    ?>
</body>
</html>
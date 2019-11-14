<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 3</title>
</head>
<body>
    <?php
    //buat class laptop
    class laptop{
        //buat property untuk class laptop
        var $pemilik;
        var $merk;
        var $ukuran_layar;
        //buat method untuk class laptop
        function hidupkan_laptop(){
            return "Hidupkan Laptop";
        }
        function matikan_laptop(){
            return "Matikan Laptop";
        }
        //buat objek dari class laptop(instansiasi)
        $laptop_rina = new laptop();
        //set property
        $laptop_rina ->pemilik= "Dwi Rina";
        $laptop_rina->merk="HP";
        $laptop_rina->ukuran_layar="14 inchi";

        //tampilkan property
        echo $laptop_rina->pemilik;echo "<br/>";
        echo $laptop_rina->merk;echo "<br/>";
        echo $laptop_rina->ukuran_layar; echo "<br/>";

        //tampilkan method
        echo $laptop_rina ->hidupkan_laptop(); echo "<br/>"
        echo $laptop_rina -> matikan_laptop();
    }
    ?>
</body>
</html>
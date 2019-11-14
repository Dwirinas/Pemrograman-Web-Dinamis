<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 10</title>
</head>
<body>
    <?php
    //buat class laptop
    class kuliah{
        //buat protected property
        protected $nama_mahasiswa;
        //buat protected method
        protected function masuk_kuliah(){
            return "Hidupkan Laptop";
        }
    }
    //buat objek dari class mahasiswa (instansiasi)
    $mahasiswa_rina= new kuliah();
    //set protected property akan menghasilkan error
    $mahasiswa_rina->nama_mahasiswa="Rina";
    //Fatal error: Cannt access protected property mahasiswa::$nama_mahasiswa

    //tampilkan protected property akan menghasilkan erro
    echo $mahasiswa_rina->nama_mahasiswa
    // Fatal error: Cannot access protected property mahasiswa::$mahasiswa_rina

    //jalankan propected method akan menghasilkan error
    echo $mahasiswa_rina->masuk_kuliah();
    ?>
</body>
</html>
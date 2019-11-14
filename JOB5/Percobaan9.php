<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 9</title>
</head>
<body>
    <?php
    //baut class kuliah
    class kuliah{
        //buat pulic property
        public $nama_mahasiswa;
        //buat public method
        public function masuk_kuliah(){
            return "masuk kuliah";
        }
    }
    // buat objek dari class kuliah(instansiasi)
    $kuliah_rina = new kuliah();
    //set property
    $kuliah_rina->nama_mahasiswa="Rina";
    //tampilkan property
    echo $kuliah_rina->nama_mahasiswa; //Rina
    //tampilkan method
    echo $kuliah_rina->masuk_kuliah(); //"masuk kuliah"
    ?>
</body>
</html>
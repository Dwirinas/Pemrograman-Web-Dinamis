<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 11</title>
</head>
<body>
    <?php
    //buat class laptop
    class kuliah{
        //buat protected property
        protected $nama_mahasiswa = "Rina";

        public function akses_mahasiswa(){
            return $this->nama_mahasiswa;
        }
        protected function masuk_kuliah(){
            return "masuk kuliah";
        }
        public function masuk_kelas(){
            return $this->masuk_kuliah();
        }
    }
    //baut objek dari class laptop(instansiasi)
    %kuliah_rina = new kuliah();
    //jalankan method akses_pemilik()
    echo $kuliah_rina->akses_mahasiswa(); //"Rina"
    //jalankan method paksa_hidup()
    echo $kuliah_rina->masuk_kelas(); //hidupkan laptop
    ?>
</body>
</html>
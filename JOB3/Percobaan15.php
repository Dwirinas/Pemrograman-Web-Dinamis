<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 15</title>
</head>
<body>
    <?php
    //Penggunaan Operator AND
    $username = "admin";
    $password = "admin123";
    if ($username == "admin" and $password == "admin123"){
        echo "Berhasil Login", echo "<br>";
    }else{
        echo "Tidak Berhasil Login"; echo "<br>";
    }
    //PENGGUNAAN OPERATOR OR
    $total_belanja = 200000;
    $kupons = 'superdiskon';
    if($total_belanja == 100000 OR $kupons == 'superdiskon'){
        echo "Anda mendapat diskon 30%"; echo "<br>";
    }
    else{
        echo "Anda tidak mendapat diskon"; echo "<br>";
    }

    //PENGGUNAAN OPERATOR XOR
    $peserta_pertama = true;
    $peserta_kedua = true;
    if($peserta_pertama XOR $peserta_kedua){
        echo "Pemenang hanya satu orang saja"; echo "<br>";
    }
    else{
        echo "Pemenang tidak boleh lebih dari satu"; echo "<br>";
    }

    //PENGGUNAAN OPERATOR NOT
    $nilai = 80;
    if($nilai !=100){
        echo "Nilai bagus";
    }
    else{
        echo "Nilai Sempurna";
    }
    ?>
</body>
</html>
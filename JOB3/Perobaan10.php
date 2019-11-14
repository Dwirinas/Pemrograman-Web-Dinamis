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
    echo strlen("Selamat Pagi");echo "cbr"; //strlen merupakan fungsi untuk menghitung jumlah karakter
    echo str_word_count("Selamat Pagi"); echo "<br>"; //str_word_count meruoakan fungsi untuk menghitung jumlah kata
    echo str_replace("Dwi","Rina","Nama saya Dwi Rina");echo "<br>"; //str_replace merupakan fungsi untuk menggantikan sebuah string
    echo substr("Nama saya Santi", 2, 6);echo "<br>"; //substr meupakan fungsi untuk membuang 2 karakter awal dan menampilkan 6 karakter setelahnya.
    echo strtolower("Selamat Belajar");echo "<br>"; //strlower merupakan fungsi untuk membuat tulisan menjadi kecil semua
    echo strtoupper("Selamat Belajar");echo "<br>"; //strtupper merupakan fungsi untuk membuat tulisan menjadi besar semua
    echo ucfirst("awal paragraf");echo "<br>" //ucfirst merupakan fungsi untuk membuat huruf pada awal kalimat menjadi besar
    echo ucwords("teknik informatika polines");echo "<br>"; //ucword merupakan fungsi untuk membuat huruf pada awal kata menjadi besar
    ?>
</body>
</html>
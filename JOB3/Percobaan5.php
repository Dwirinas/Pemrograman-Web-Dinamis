<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 5</title>
</head>
<body>
    <?php
    $var = 4.82;
    $holder = (double)$var;
    echo "$holder adalah ";
    echo gettype ($holder);
    echo "<br>";
    $holder = (integer)$var;
    echo "$holder adalah ";
    echo gettype($holder);
    echo "<br>";
    $holder = (boolean)$var;
    echo gettype($holder);
    echo "<br>";
    echo "tipe asli variabel";
    echo gettype($var);
    ?>
</body>
</html>
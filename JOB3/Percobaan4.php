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
    $testing = 5;
    echo gettype($testing);
    $testing = "belajar PHP";
    echo "<br>";
    $testing = 5.0;
    echo gettype($testing);
    echo "<br>";
    $testing = true;
    echo gettype($testing);
    ?>
</body>
</html>
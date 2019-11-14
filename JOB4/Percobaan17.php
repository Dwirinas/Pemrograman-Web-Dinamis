<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 17</title>
</head>
<body>
    <?php
    $colors = ['red', 'yellow', 'blue', 'green'];
    for($i = 0; $i <count($colors); $i++){
        echo 'My favourite color is '. $colors[$i]. '<br>';
    }
    ?>
</body>
</html>
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
    $object1 = new User();
    $object1->name = "Dwi";
    $object2 = $object1;
    $object2->name = "Rina"
    echo "object1 name = " .$object1->name ."<br>";
    echo "object2 name = " .$object2->name;

    class User{
        public $name;
    }
    ?>
</body>
</html>
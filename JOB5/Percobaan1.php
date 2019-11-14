<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan 1</title>
</head>
<body>
    <?php
    $object = new User;
    print_r($object);
    class User{
        public $name, $password;
        function save_user()
        {
            echo "Save User code goes here";
        }
    }
    ?>
</body>
</html>
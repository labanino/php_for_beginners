<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <h2>Testing One Condition Against Multiple Values</h2>
    <?php

    $number = 34;

    switch($number) {
        case 34:
            echo "number is equal to 34";
            break;
        case 37:
            echo "number is equal to 37";
            break;
        case 35:
            echo "number is equal to 35";
            break;
        case 24:
            echo "number is equal to 24";
            break;
        default:
            echo "Nothing found!";
            break;
    }
    
    ?>
</body>
</html>
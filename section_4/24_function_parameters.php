<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Parameters</title>
</head>
<body>
    
    <?php

    function calculate($number1, $number2) {
        $multiply = $number1 * $number2;
        echo "The result is " . $multiply;
    }

    calculate(5, 9);

    ?>

</body>
</html>
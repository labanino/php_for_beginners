<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Values From Functions</title>
</head>
<body>

    <?php

    function calculate($number1, $number2) {
        $multiply = $number1 * $number2;
        return $multiply;
    }

    $result = calculate(5, 3);

    echo "The result is " . $result;

    echo "<br>";

    $result = calculate(5, 100);

    echo "Re-using the function all over again, " . $result;

    ?>

</body>
</html>
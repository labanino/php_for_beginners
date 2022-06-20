<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defining Functions</title>
</head>
<body>

    <?php

    function init() {
        say_Something();
        echo "<br>";
        calculate();
    }

    function calculate() {
        echo 576 + 832;
    }

    function say_Something() {
        echo "PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.";
    }

    init();

    ?>

</body>
</html>
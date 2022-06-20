<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variable and Scope</title>
</head>
<body>
    <?php
    $a = "Global Scope"; /* global scope */

    function scope() { 
        global $a;
        $a = "Local Scope"; /* local scope */
    } 

    echo $a . "<br>";

    scope();

    echo $a;

    ?>
</body>
</html>
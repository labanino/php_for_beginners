<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>
</head>
<body>
    
    <?php
    
    $numbers = array(848, 238, 250, 171, 970, 285, 198);

    foreach ($numbers as $number) {
        echo $number . '<br/>';
    }

    ?>

</body>
</html>
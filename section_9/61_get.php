<?php

print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using the GET super Global</title>
</head>
<body>

    <?php
        $id = 10;
    ?>
    <p><a href="61_get.php?id=<?php echo $id; ?>">CLICK HERE</a></p>

</body>
</html>
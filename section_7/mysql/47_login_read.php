<?php

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query failed" . mysqli_error());
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading Information in the Database with PHP</title>
</head>

<body>

    <?php
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <pre>
            <?php
                print_r($row);
            ?>
        </pre>

        <?php
        }
    ?>

</body>

</html>
<?php
    $name =  "myCookie";
    $value = 100;
    $expiration = time() + (60 * 60 * 24 * 7); // A week from now

    setcookie($name,$value,$expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting Cookies with PHP</title>
</head>
<body>
    
    <?php
        if(isset($_COOKIE["myCookie"])) {
            $yourCookie = $_COOKIE["myCookie"];
            echo $yourCookie;
        }
    ?>

</body>
</html>
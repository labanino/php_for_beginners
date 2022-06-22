<?php
    echo $_POST['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using the Post Super Global</title>
</head>
<body>
    <form action="62_post.php" method="post">
        <input type="text" name="name">
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>
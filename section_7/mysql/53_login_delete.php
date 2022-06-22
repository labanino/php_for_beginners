<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php deleteRows(); ?>  
<?php $title = "Delete Records From Database with PHP"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Records From Database with PHP</title>
    <style>
        p,
        input,
        select {
            margin-bottom: 10px;
            display: block;
        }
    </style>
</head>

<body>
    <h1>Delete</h1>
    <form action="53_login_delete.php" method="post">
        <input for="username" id="username" name="username" type="text" placeholder="Username">
        <input type="password" for="password" id="password" name="password" placeholder="Enter your Password">
        <select name="id" id="">
            <?php
                showAllData();
            ?>
        </select>
        <input type="submit" name="submit" value="Delete">
    </form>

</body>

</html>
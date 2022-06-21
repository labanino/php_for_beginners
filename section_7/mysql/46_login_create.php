<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php createRows() ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Records into the database table with PHP</title>
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
    <h1>Create</h1>
    <form action="46_login_create.php" method="post">
        <input for="username" id="username" name="username" type="text" placeholder="Username">
        <input type="password" for="password" id="password" name="password" placeholder="Enter your Password">
        <input type="submit" name="submit" value="CREATE">
    </form>
</body>
</html>
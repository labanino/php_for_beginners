<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
    if(isset($_POST['submit'])) {
        updateTable();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading Information in the Database with PHP</title>
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

    <form action="48_login_update.php" method="post">
        <input for="username" id="username" name="username" type="text" placeholder="Username">
        <input type="password" for="password" id="password" name="password" placeholder="Enter your Password">
        <select name="id" id="">
            <?php
                showAllData();
            ?>
        </select>
        <input type="submit" name="submit" value="Update">
    </form>

</body>

</html>
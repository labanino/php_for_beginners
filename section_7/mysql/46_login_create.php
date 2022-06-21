<?php

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp'); 
    if($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }

    $query = "INSERT INTO users(username,password) ";
    $query .= " VALUES ('$username', '$password')"; 

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query failed" . mysqli_error());
    }

}

?>  

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
    <form action="46_login_create.php" method="post">
        <input for="username" id="username" name="username" type="text" placeholder="Username">
        <input type="password" for="password" id="password" name="password" placeholder="Enter your Password">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
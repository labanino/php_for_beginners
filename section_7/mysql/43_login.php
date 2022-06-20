<?php

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo "Good morning " . $username . "<br>";
    // echo "Your password is " . $password;

    // if($username && $password) {
    //     echo $username;
    //     echo $password;
    // } else {
    //     echo "this field cannot be blank";
    // }

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp'); 

    if($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markup for Login Page</title>
</head>
<body>
    <form action="43_login.php" method="post">
        <input for="username" id="username" name="username" type="text" placeholder="Username"><br>
        <input type="password" for="password" id="password" name="password" placeholder="Enter your Password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
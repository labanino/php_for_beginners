<?php

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Good morning " . $username . "<br>";
    echo "Your password is " . $password;
}

?>
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "cms";

// Create connection
$connection = mysqli_connect($servername,$username,$password,$database);

// Check connection
if(!$connection) {
    echo (mysqli_connect_error());
}
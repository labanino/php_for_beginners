<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "cms";

// Create connection
$connection = mysqli_connect($servername,$username,$password,$database);

// Check connection
if(!$connection) {
    die("CONNECTION FAILED: " . mysqli_connect_error());
}
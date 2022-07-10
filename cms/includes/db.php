<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "cms";

// Enable error reporting for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create connection
$connection = mysqli_connect($servername,$username,$password,$database);

// Set the desired charset after establishing a connection 
mysqli_set_charset($connection, 'utf8mb4');

// Check connection
if(!$connection) {
    die("CONNECTION FAILED: " . mysqli_connect_error());
}
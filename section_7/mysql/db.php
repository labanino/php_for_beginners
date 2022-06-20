<?php

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp'); 

    if(!$connection) {
        die("<p>Database connection failed</p>");
    }

?>
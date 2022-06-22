<?php include "db.php"; ?>
<?php

// Create records in the users database
function createRows() {

    global $connection;

    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // to prevent SQL injection
        $username = mysqli_real_escape_string($connection, $username );
        $password = mysqli_real_escape_string($connection, $password );

        // for encryptions
        $hashFormat = "$2y$10$";
        $salt = "oietsmzxcoertkaslklkll";
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password,$hashF_and_salt);

        $query = "INSERT INTO users(username,password) ";
        $query .= " VALUES ('$username', '$password')"; 

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        } else {
            echo "Record Created";
        }

    }   

}

// Show ids in the select dropdown
function showAllData() {

    global $connection;

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query failed" . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

}

// Update users table in the database
function updateTable() {

    global $connection;

    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        } else {
            echo "Record Updated";
        }
    }

}  

// Delete records in the database
function deleteRows() {

    if(isset($_POST['submit'])) {

        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        } else {
            echo "Record Deleted";
        }

    }

}
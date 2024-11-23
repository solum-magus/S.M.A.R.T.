<?php

    $host = "localhost";
    $database = "smartdb";
    $username = "root";
    $password = "";

// Establish the connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

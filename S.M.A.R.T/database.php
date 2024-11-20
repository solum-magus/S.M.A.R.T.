<?php

    $host = "localhost";
    $database = "smartdb";
    $username = "root";
    $password = "";

    $mysqli = new mysqli(hostname: $host,
                         database: $database,
                         username: $username,
                         password: $password);

    if ($mysqli->connect_errno) {
        die("Connection Error: " . $mysqli->connect_error);
    }

    return $mysqli;

?>
<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $mysqli = require __DIR__ . "/database.php";
        $sql = sprintf("SELECT * FROM userinfo
                        WHERE school_id = '%s'", $mysqli->real_escape_string($_POST["signin_school_id"]));
        
        $data = $mysqli->query($sql);

        $user = $data->fetch_assoc();

        var_dump($user);            

    }

?>
<?php

    $invalid_signin = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $mysqli = require __DIR__ . "/database.php";
        $sql = sprintf("SELECT * FROM userinfo
                        WHERE school_id = '%s'",
                        $mysqli->real_escape_string($_POST["signin_school_id"]));
        
        $data = $mysqli->query($sql);

        $user = $data->fetch_assoc();

        if ($user) {

            if (password_verify($_POST["signin_password"], $user["hashword"])) {

                switch ($user["position"]) {
                    case "Student":

                        session_start();
                        session_regenerate_id();

                        $_SESSION["fname"] = $user["full_name"];
                        $_SESSION["id"] = $user["school_id"];
                        $_SESSION["position"] = $user["position"];

                        header("Location: /S.M.A.R.T/Pages/Homepage.php");

                        exit;
                    case "Admin":
                        header("Location: /S.M.A.R.T/errorpage.html");
                        exit;
                    case "Teacher":
                        header("Location: /S.M.A.R.T/errorpage.html");
                        exit;
                }

            }

        }
        
        $invalid_signin = true;

        if ($invalid_signin === true) {
            header("Location: /S.M.A.R.T/errorpage.html");
            exit;
        }

    }

?>

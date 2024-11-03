<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    $mysqli = require __DIR__ . "/database.php";

    $email = $mysqli->real_escape_string($_POST["email"]);
    $sql = "SELECT * FROM user WHERE email = '$email'";    

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            session_start();
            $_SESSION["user_id"] = $user["ID"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["position"] = $user["position"];
            header("Location: ../Homepage.html");
            exit;
        } else {
            echo "<script>
                alert('Invalid password.');
                window.location.href = '../Signin.html';
            </script>";
            exit;
        }
    } else {
        echo "<script>
            alert('No user found with that email.');
            window.location.href = '../Signin.html';
        </script>";
        exit;
    }
}
?>

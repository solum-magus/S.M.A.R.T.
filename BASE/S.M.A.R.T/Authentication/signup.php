<?php
    if ($_POST["password"] !== $_POST["confirm_password"]) {
        echo "<script>
            alert('Passwords must match.');
            window.location.href = '../index.html';
        </script>";
    }

    $hashword = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $mysqli = require __DIR__ . "/../database.php";

    $sql = "INSERT INTO userinfo (position, full_name, school_id, hashword)
            VALUES (?, ?, ?, ?)";
    
    $insert = $mysqli->stmt_init();

    $insert->prepare($sql);

    $insert->bind_param("ssis",
                        $_POST["position"],
                        $_POST["full_name"],
                        $_POST["school_id"],
                        $hashword);

    try {
    $insert->execute();
        header("Location: /S.M.A.R.T/index.html");
        exit;
    } catch (Exception) {
        echo "<script>
            alert('This ID is already taken.');
            window.location.href = '../index.html';
        </script>";
    }
?>
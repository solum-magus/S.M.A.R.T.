<?php

    $mysqli = require __DIR__ . "/../database.php";

    $sql = "INSERT INTO sentfeedback (id_report, user_feedback, rating)
            VALUES (?, ?, ?)";

    $insert = $mysqli->stmt_init();

    $insert->prepare($sql);

    $insert->bind_param("iss",
                        $_POST["id_report"],
                        $_POST["user_feedback"],
                        $_POST["rating"]);

    try {
    $insert->execute();
        echo
        "<script>
            alert('Your feedback has been submitted.');
            window.location.href = '../Pages/Homepage.php';
        </script>";
        
        exit;
    } catch (Exception) {
        echo
        "<script>
            alert('There was a problem submitting your feedback.');
            window.location.href = '../Pages/Homepage.php';
        </script>";
    }
    

?>
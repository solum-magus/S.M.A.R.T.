<?php


    $mysqli = require __DIR__ . "/../database.php";

    $sql = "INSERT INTO reportdetails (rname, plocation, problem, pdescription)
            VALUES (?, ?, ?, ?)";

    $insert = $mysqli->stmt_init();

    $insert->prepare($sql);

    $insert->bind_param("ssss",
                        $_POST["rname"],
                        $_POST["plocation"],
                        $_POST["problem"],
                        $_POST["pdescription"]);

    try {
    $insert->execute();
        header("Location: /../Pages/Homepage.php");
        exit;
    } catch (Exception) {
        die("There was a problem submitting your report.");
    }

?>
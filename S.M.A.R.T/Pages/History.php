<?php 
session_start();

if (!isset($_SESSION["position"])) {
    echo "<script>
    alert('You are not logged in!');
    window.location.href = '../index.html';
    </script>";
    exit();
}

$Testsql = require __DIR__ . "/../database.php";
$position = $_SESSION["position"];
$sql = "SELECT * FROM userinfo WHERE position = '$position'";
$result = $Testsql->query($sql);

$sql = "SELECT * FROM reportdetails WHERE status IN ('Pending', 'Ongoing', 'Resolved') ORDER BY date_reported DESC";
$Report = $Testsql->query($sql);

$reports = []; 

if ($Report->num_rows > 0) {
    while ($row = $Report->fetch_assoc()) { 
        $reports[] = $row;  
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMART - Report History</title>
        <link rel="icon" type="image/x-icon" href="../Assets/Logo2.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Style/History.css">
        <link rel="stylesheet" href="../Style/Nav_Bar.css">

    </head>
    <body>
        <div class="Container">
            <nav>
                <svg id="logo" height="50" width="50">
                    <image height="50" width="50" href="../Assets/Logo2.png"></image>
                </svg>
                <span id="smart">SMART</span>
            </nav>
            <main>
                <div id="historyinfo">
                    <span style="font-size: 30px; font-weight: bold;">Report History</span>
                    <div class="historybar">
                        <?php 
                        // Loop through all reports and display 'em
                        foreach ($reports as $report): 
                        ?>
                            <div class="report 
                                <?php
                                    // Change div class based on status 
                                    echo strtolower($report['status']);
                                ?>">
                                <h3>Status: <?= $report['status'] ?></h3>
                                <p>Report ID: <?= $report['report_id'] ?></p>
                                <p>Problem: <?= $report['problem'] ?></p>
                                <p>Date Reported: <?= $report['date_reported'] ?></p>
                                <p>Date Resolved: <?= $report['date_resolved'] ?: "Not yet resolved" ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </main>
            <div id="side">
                <div id="icons">
                    <a href="Profile.php"><img id="prof" src="../Assets/Profile.png"></a>

                    <?php if ($_SESSION["position"] == "Admin" || $_SESSION["position"] == "Maintenance Staff"):?>
                    <a href="Admin.php"><img id="home" src="../Assets/Home.png"></a>

                    <?php else: ?>
                        <a href="Homepage.php"><img id="home" src="../Assets/Home.png"></a>
                    <?php endif; ?>

                    <a href="History.php"><img id="id" src="../Assets/History.png"></a>
                    <a href="Feedback.php"><img id="fb" src="../Assets/Feedback.png"></a>
                    <a href="Notification.php"><img id="notif" src="../Assets/Notification.png"></a>
                </div>
            </div>
        </div>
    </body>
</html>

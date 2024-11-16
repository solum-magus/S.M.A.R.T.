<?php

    session_start();

    if (isset($_SESSION["fname"]) && isset($_SESSION["position"])) {

        $mysqli = require __DIR__ . "/../database.php";

        $fname = $mysqli->real_escape_string($_SESSION["fname"]);
        $position = $mysqli->real_escape_string($_SESSION["position"]);

        $sql = "SELECT * FROM userinfo
                WHERE full_name = '$fname'
                AND position = '$position'";

        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();

    }

?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMART - Home</title>
        <link rel="icon" type="image/x-icon" href="../Assets/Logo2.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Style/Homepage.css">
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
                <div id="homeprof">
                    <div id="prof22"><img id="prof2" src="../Assets/Profile.png"></div>

                    <?php if (isset($fname)):  ?>

                    <div id="nameposition"><span><?= htmlspecialchars($user["full_name"]) ?></span>
                    <span><?= htmlspecialchars($user["position"]) ?></span></div>

                    <?php endif; ?>
                </div>

                <div id="report">
                    <span style="font-size: 30px; font-weight: bold;">Report Facility Issue</span>
                    
                    <form>
                        <div id="inputdiv">
                        <p>Name & Section</p>
                        <input type="text">
                        <br>

                        <p>Location of Issue</p>
                        <input type="text">
                        <br>

                        <p>Problem</p>
                        <input type="text">
                        <br>
                        
                        <p>Description</p>
                        <input type="text">
                        <br>
                        <br>

                        <input type="submit" value="Submit Report">
                        </div>
                    </form>
                </div>
            </main>

            <div id="side">
                <div id="icons">
                    <a href="Profile.php"><img id="prof" src="../Assets/Profile.png"></a>
                    <a href="Homepage.php"><img id="home" src="../Assets/Home.png"></a>
                    <a href="History.php"><img id="id" src="../Assets/History.png"></a>
                    <a href="Feedback.php"><img id="fb" src="../Assets/Feedback.png"></a>
                    <a href="Notification.php"><img id="notif" src="../Assets/Notification.png"></a>
                </div>
            </div>
        </div>
    </body>
</html>
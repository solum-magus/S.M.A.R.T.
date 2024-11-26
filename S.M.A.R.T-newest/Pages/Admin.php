<?php
    session_start();

    if (!isset($_SESSION["position"])) {
        echo "<script>
        alert('You are not logged in!');
        window.location.href = '../index.html';
        </script>";
        exit();
    }
    $mysqli = require __DIR__ . "/../database.php";

    $sql = "SELECT report_id, rname, plocation, problem, pdescription  FROM reportdetails";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $reports = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $reports = [];
    }
    ?>




<html>
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMART - Home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Style/Admin.css">
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
			    <div id="mainrep">
                    
				    <span style="font-size: 30px; 	font-weight: bold; text-align: center;	margin-top: 25px;">Maintenance Report</span>
			        <table style="background-color: black; width: 95%; height: 95%; margin-right: auto; margin-bottom: 35%;">

					  <tr>
					    <th>Report ID</th>
					    <th>Location</th>
						<th>Problem</th>
						<th>Description</th>
					  </tr>
                      <?php foreach ($reports as $report): ?>
					  <tr>
                        <td><?= $report['report_id']; ?></td>
                        <td><?= $report['plocation']; ?></td>
                        <td><?= $report['problem']; ?></td>
                        <td><?= $report['pdescription']; ?></td>
					  </tr>
					  <?php endforeach; ?>

				   </table>		 		    
                </div>   
            </main>
             <div id="side">
             <div id="icons">
                <a href="Profile.php"><img id="prof" src="../Assets/Profile.png"></a>

                <?php if ($_SESSION["position"] == "Admin" || $_SESSION["position"] == "Maintenance Staff"):?>
                    <a href="Admin.php"><img id="" src="../Assets/Home.png"></a>

                <?php else: ?>
                    <a href="Homepage.php"><img id="home" src="../Assets/Home.png"></a>
                <?php endif; ?>

                <a href="History.php"><img id="id" src="../Assets/History.png"></a>


                <?php if ($_SESSION["position"] == "Admin" || $_SESSION["position"] == "Maintenance Staff"):?>
                    <a href="AdminFeed.php"><img id="" src="../Assets/Feedback.png"></a>

                <?php else: ?>
                    <a href="Feedback.php"><img id="fb" src="../Assets/Feedback.png"></a>
                <?php endif; ?>

                <a href="Notification.php"><img id="notif" src="../Assets/Notification.png"></a>
                </div>
</body>
</html>

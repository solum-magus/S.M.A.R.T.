<?php 
session_start();

if (!isset($_SESSION["position"])){
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
$sql = "SELECT id_report, user_feedback, rating, Id  FROM sentfeedback";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $sent = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $sent = [];
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
        <link rel="stylesheet" href="../Style/AdminFeed.css">
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
                    <a href="../Excel/export.php"> <button id="exxport" type="button" name="button">Export To Excel</button> </a>
			        <table style="background-color: 7AB2D3; width: 90%; height: 45%; margin-right: auto; margin-bottom: 35%;">

					<tr id="tr1">
					    <th>
                            <p class="p1">Rating:<br><br><?php foreach ($sent as $send): ?>
                                <?= $send['rating']; ?>
                                 <?php endforeach; ?>
                            </p>
					                     					 
                            <p class="p2">Report ID:<br><br><?php foreach ($sent as $send): ?>
                                <?= $send['id_report']; ?>
                                 <?php endforeach; ?></p>
                        </th>
					    
                        <th class="th2">
                            <p class="p3">Feedback:<br><br><?php foreach ($sent as $send): ?>
                                <?= $send['user_feedback']; ?>
                                 <?php endforeach; ?></p></p>
                        </th>
					</tr>                     
				   </table>	
                   <table style="background-color: 7AB2D3; width: 90%; height: 45%; margin-right: auto; margin-bottom: 35%;">
                   <tr id="tr2">
					    <th>
                            <p class="p4">Rating:</p>
                            <p class="p5">Report ID:</p>
                        </th>
					    
                        <th class="th3">
                            <p class="p6">Feedback:</p>
                        </th>
					</tr>

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
			</div>
			
        </div>
    </body>
</html>

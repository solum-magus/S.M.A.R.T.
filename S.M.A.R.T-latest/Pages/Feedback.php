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
        <link rel="stylesheet" href="../Style/Feedback.css">
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
                <form action="../Authentication/sendfeedback.php" method="post">
			       <div id="nameid">				         
						       <span style="font-size: 30px; font-weight: bold;">Report ID</span>						  							  						
						  <input class="input1" id="id_report" name="id_report">				   
				   </div>
				   <div id="feedback">
				        <span style="font-size: 30px; font-weight: bold;">Feedback</span>
						
				        <textarea class="input2" id="user_feedback" name="user_feedback"></textarea>
						<div class="container1">
    		                
							<select id="rating" name="rating">
                                <option value=""disabled selected>Rating</option>				
                                <option style="color: red">Terrible</option>
                                <option style="color: orange">Poor</option>
                                <option style="color: white">Satisfactory</option>
                                <option style="color: lightgreen">Good</option>
                                <option style="color: green">Excellent</option>							
                            </select>
							
                        <button>Submit</button>
                    </form>	
					 
						</div>
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
    </body>
</html>

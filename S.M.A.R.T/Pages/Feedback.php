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
						  <input class="input1" id="id_report" name="id_report" placeholder="Please make sure the Report ID exists and only input numbers.">				   
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
                <a href="Homepage.php"><img id="home" src="../Assets/Home.png"></a>
                <a href="History.php"><img id="id" src="../Assets/History.png"></a>
                <a href="Feedback.php"><img id="fb" src="../Assets/Feedback.png"></a>
                <a href="Notification.php"><img id="notif" src="../Assets/Notification.png"></a>
                </div>
			</div>
			
        </div>
    </body>
</html>

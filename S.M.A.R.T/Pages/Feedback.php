<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMART - Home</title>
        <link rel = "stylesheet" href = "../Style/Feedback.css">
		<link rel = "stylesheet" href = "https://fonts.google.com/specimen/Lato?query=lato">
    </head>
    <body>
        <div class="Container">
            <nav>
			    <svg id="logo" height="50" width="50">
                    <image height="50" width="50" href="../Assets/Logo2.png"></image>
                </svg>
                <span style="color: white; font-size: 64px; font-family: 'Lato'; font-weight: 800;">SMART</span>
			</nav>
            <main>
			       <div id="nameid">				         
						       <span style="font-size: 30px; font-weight: bold;">Report ID</span>						  							  						
						  <input class="input1">				   
				   </div>
				   <div id="feedback">
				        <span style="font-size: 30px; font-weight: bold;">Feedback</span>
						
				        <textarea class="input2"></textarea>
						<div class="container1">
    		                
							<select>
                                <option value=""disabled selected>Rating</option>							
                                <option style="color: red">Terrible</option>
                                <option style="color: orange">Poor</option>
                                <option style="color: white">Satisfactory</option>
                                <option style="color: lightgreen">Good</option>
                                <option style="color: green">Excellent</option>							
                            </select>
							
                        <button>Submit</button>	
					 
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

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMART - Home</title>
        <link rel="icon" type="image/x-icon" href="../Assets/Logo2.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Style/Profile.css">
        <link rel="stylesheet" href="../Style/Nav_Bar.css">
    </head>
    <body>
        <div class="Container">
            <nav>
                <a href="Homepage.html">
                    <svg id="logo" height="50" width="50">
                        <image height="50" width="50" href="../Assets/Logo2.png"></image>
                    </svg>
                    <span id="smart">SMART</span>
                </a>
            </nav>
            <main>
                <div class="profile-container">
                    <div class="profile-header">
                        <img class="profile-picture" src="../Assets/Profile.png" alt="Profile Picture">
                        <h1 class="profile-name">Placeholder</h1>
                        <p class="profile-position">(Position)</p>
                    </div>
            
                    <div class="profile-details">
                        <h2>About</h2>
                        <p>Bio</p>

                        <h2>Recent Activity</h2>
                        <ul>
                            <li>Reported issue in Room 101 - 10/11/2024</li>
                            <li>Submitted feedback - 08/10/2024</li>
                        </ul>
                    </div>

                    <div id="signout_button">
                        <a href="../signout.php"><button>Sign out</button></a>

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
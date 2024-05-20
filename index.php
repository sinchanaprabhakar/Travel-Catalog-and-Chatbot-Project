<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
        <style>
        *{
            padding: 0px;
            margin: 0px;
            text-decoration: none;
            margin-bottom: 30px;
        }
        .bg{
            background-image: url("images/home.jpg");
            background-size: 1285px 685px;
            background-repeat: no-repeat;
        }
        nav{
            position: fixed;
            width: 1233px;
            height: 55px;
            background: #a6def7;
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 7px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .navbar{
            padding-top: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo img{
            padding-bottom: 24px;
            width: 170px;
            height: 35px;
        }
        li{
            padding-bottom: 18px;
            list-style: none;
            display: inline-block;
        }
        li a{
            color: black;
            margin-right: 55px;
            font-size: 15px;
            font-weight: bold;
        }
        li a:hover{
            background: -webkit-linear-gradient(rgb(12, 62, 241), rgb(212, 4, 4));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-style: italic;
        }
        li button{
            background-color: rgb(10, 158, 45);
            border-radius: 10px;
            padding: 7px;
            width: 113px;
        }
        .left-section{
            margin-left: 40px;
            padding-top: 260px;
            color: yellow;
            text-align: left;
            font-size: 35px;
            line-height: 90%;
        }
        .button{
            width: 250px;
            height: 70px;
            font-size: 20px;
            color: white;
            background-color: #A1397D;
        }
        .body{
            margin-top: 100px;
            padding-top: 90px;
            font-size: 20px;
            color: purple;
        }
        .body h2{
            font-size: 70px;
            margin-left: 5px;
            text-align: center;
        }
        .body p{
            font-size: 22px;
            font-style: italic;
            margin-left: 25px;
            margin-right: 25px;   
        }
        .body img{
            float: right;
        }
        /* chatbot styling */
        #chatbot-icon {
            position: fixed;
            border-radius: 30px;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            z-index: 100; /* Ensure the icon stays on top of other elements */
        }
        #chatbot-content {
            position: fixed; /* Set fixed position for chatbot content */
            top: 0; /* Initially position it off-screen */
            right: 0;
            display: none;
            width: 50px; /* Match icon size */
            height: 50px; /* Match icon size */
            background-color: rgba(255, 255, 255, 0.8); /* Optional: Semi-transparent background */
            border: 1px solid #ccc; /* Optional: Border */
            padding: 5px; /* Optional: Inner padding */
            z-index: 101; /* Ensure it stays above other elements */
        }
        #chatbot-content:hover {
            display: block; /* Display content on hover over icon */
        }
        </style>
    </head>
    <body> 
        <nav>
            <div class="navbar">
                <div class="logo"><a href="home.php"><img src="images/logo.jpg" alt="Logo"></a></div>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="cities.html">CITIES</a></li>
                </ul>
            </div>
        </nav>
        <div class="bg">
            <div class="title">
                <section class="left-section">
                    <p><h1>My Travel Catalogue</h1><br><h3>Go, Find, Explore!</h3><br>
                        <button class="button">READ MORE</button>
                    </p>
                </section>
            </div>
            <div class="body">
                <h2>“Life is either a daring adventure or nothing at all.”</h2>
                <p> <img src="images/place.avif" alt="place" width="500px" height="250px">
                    Forget the same old vacation. 
                    We craft immersive experiences that ignite your curiosity. 
                    Dive into ancient ruins with a local archaeologist, 
                    learn to cook paella from a Spanish abuela, 
                    or chase the Northern Lights with a team of photographers.<br><br>  
                    It's your world, unscripted - explore it authentically with us.
                    Travel isn't just about places, it's about feeling. 
                    Imagine the thrill of conquering a mountain peak, 
                    the joy of reconnecting with ancient cultures, 
                    or the peace of finding yourself amidst turquoise waters. 
                    We curate journeys that spark emotions, not just checkmarks. 
                    Let's wanderlust together.
                </p>
            </div>
        </div>
        <div class="your-target-container-id"></div>
        <a href="#" onclick="openChatbotInFrame()">
            <img src="https://www.shutterstock.com/image-vector/chat-bot-logo-design-concept-600nw-1938811039.jpg" alt="Chatbot Icon" width="50" height="50" id="chatbot-icon">
        </a>
        <script>
            function openChatbotInFrame() {
                // Create a new element (iframe) to hold the chatbot
                var chatbotFrame = document.createElement("iframe");
                chatbotFrame.src = "chatbot.html";
                chatbotFrame.id = "chatbotFrame"; // Optional: set an ID for styling (see below)
                chatbotFrame.style.width = "400px";
                chatbotFrame.style.height = "300px";
                chatbotFrame.style.border = "none"; // Optional: remove border

                // Find a suitable location on the page to insert the iframe
                var targetContainer = document.getElementById("your-target-container-id"); // Replace with actual ID
                if (targetContainer) {
                    targetContainer.appendChild(chatbotFrame);
                } else {
                    // Fallback if target container not found (append to body)
                    document.body.appendChild(chatbotFrame);
                }
            }
        </script>
    </body>
</html>
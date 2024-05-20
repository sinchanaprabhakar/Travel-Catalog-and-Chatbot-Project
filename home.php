<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>
    <body>
        <nav>
            <div class="navbar">
            <div class="logo"><a href="home.php"><img src="images/logo.jpg" alt="Logo"></a></div>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="login.php">CITIES</a></li>
                <li><button><a href="signup.php">Login/Signup</a></button></li>
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
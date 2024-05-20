<?php 
session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<style type="text/css">	
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}
		#button{
			padding: 10px;
			width: 100px;
			color: yellow;
			background-color: #AD12F5;
			border: none;
		}
		#box{
			text-align: center;
			margin-top: 100px;
			margin-left: 470px;
			background-color: #E3C5F0;
			width: 300px;
			padding: 20px;
		}
		body{
			background-image: url("images/login.jpg");
			background-repeat: no-repeat;
			background-size: cover;
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
		<div id="box">
			<form method="post">
				<div style="font-size: 30px;margin: 10px;color: black;">LOGIN</div>
				<input id="text" type="text" name="user_name"><br><br>
				<input id="text" type="password" name="password"><br><br>
				<input id="button" type="submit" value="Login"><br><br>
				<a href="signup.php">Click to Signup</a><br><br>
			</form>
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
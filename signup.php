<?php 
session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
        $email=$_POST['email'];
		$password = $_POST['password'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email))
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$password')";
			mysqli_query($con, $query);
			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Signup</title>
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
				margin-top: 120px;
				margin-left: 470px;
				background-color: #E3C5F0;
				width: 300px;
				padding: 20px;
			}
			body{
				background-image: url("images/signup.jpg");
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
				<div style="font-size: 30px;margin: 10px;color: black;">SIGN UP</div>
				<input id="text" type="text" name="user_name" placeholder="Enter username"><br><br>
				<input id="text" type="text" name="email" placeholder="Enter email"><br><br>
				<input id="text" type="password" name="password" placeholder="Enter password"><br><br>
				<input id="button" type="submit" value="Signup"><br><br>
				<a href="login.php">Click to Login</a><br><br>
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
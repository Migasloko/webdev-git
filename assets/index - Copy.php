 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- <link rel="stylesheet" type="text/css" href="css\style.css">  -->
	</head>
	<body>
		
			<div id="loginform" method="POST">
				<form action="signup.php">
					<img src="https://yt3.ggpht.com/-7KUlG_V9rKE/AAAAAAAAAAI/AAAAAAAAAAA/S6rhNVQF778/s100-c-k-no-mo-rj-c0xffffff/photo.jpg" id="websitelogo"> </img>
				
					<h1 align="center">Welcome to OPG Gaming</h1>
					
						<input id="input" type="text" name="user" placeholder="Username"><br>
						<input id="input" type="text" name="pass" placeholder="Password">
						<button type="submit">Login</button>
							<!-- <div id="loginbutton">Login</div> -->
							<p align="center">Forgot your password? <a href="">Click Here</a></p>
						</input>
						<p> register </p>
						<input id="input" type="text" name="user" placeholder="Username"><br>
						<input id="input" type="text" name="pass" placeholder="Password">
						<button type="submit">Sign Up</button>
					</input>
				</form>	
			</div>
	</body>
</html>

<?php
	$include 'dbh.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	echo "User:$user | Pass:$pass";
?>

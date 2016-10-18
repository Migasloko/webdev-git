<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css\style.css">
	</head>
	<body>
			<div id="loginform">
				<form method="POST">
					<img src="https://yt3.ggpht.com/-7KUlG_V9rKE/AAAAAAAAAAI/AAAAAAAAAAA/S6rhNVQF778/s100-c-k-no-mo-rj-c0xffffff/photo.jpg" id="websitelogo"> </img>

					<h1 align="center">Welcome to OPG Gaming</h1>

						<input id="input" type="text" name="user" placeholder="Username"><br>
						<input id="input" type="text" name="pass" placeholder="Password">

							<button align="center" type="submit" id="loginbutton">Login </button>
							<p id="fp" align="center">Forgot your password? <a href="">Click Here</a></p>

						</input>
					</input>
				</form>
				<?php

				 if (isset($_POST['submit'])){
					 	echo "IS SET!";
				 }
				 else{
					 echo "NOT SET!";
				 }

			 ?>
				</div>
	</body>
</html>

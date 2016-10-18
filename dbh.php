<?php 
	$conn = mysqli_connect("217.129.76.187", "sagoza", "whitehat", "csdb");

	if (!$conn){
		die("Connection failed: ".mysql_connect_error());
	}
?> 
<?php
	session_start();
	include 'dbh.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = "INSERT INTO users (user, pass) VALUES ('$user','$pass')";

	if (!$row = mysqli_fetch_assoc($result)){
		echo "Invalid Username or Password!";
	}else{
		$_SESSION['id'] = $row['id'];
	}

	$result = mysqli_query($conn, $sql);
	header("Location: index.php");
	

?>
<?php
	session_start();
	include 'dbh.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM users WHERE user='$user' AND pass='$pass' ";
	$result = mysqli_query($conn, $sql);

 	if (!$row = mysqli_fetch_assoc($result)){
 		$_SESSION['reason'] = 1;
 		header("Location: index.php");
 	}
 	else
 	{
		$_SESSION['id'] = $row['id'];
		//$_SESSION['reason'] = 0;
		header("Location: home.php");
 	}
?>

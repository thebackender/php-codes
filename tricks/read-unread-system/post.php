<?php
	unset($_COOKIE["user"]);
	$connect = mysqli_connect("localhost", "root", "", "read-unread-system");
	$user = $_POST['user'];
	$message = $_POST['message'];
	$sql = "INSERT INTO messages (user, message) VALUES('$user', '$message')";
	mysqli_query($connect, $sql);
	setcookie("user", $user);
	header("Location: index.php");
?>
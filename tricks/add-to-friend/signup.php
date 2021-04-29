<?php
	$connect = mysqli_connect("localhost", "root", "", "add-to-friend");
	$user = $_POST['user'];
	$sql = "INSERT INTO `users` (`id`, `user`, `friends`) VALUES (NULL, '".$user."', '');";
	mysqli_query($connect, $sql);
	setcookie('user', $user);
	echo "<script>window.location='home.php';</script>";
?>
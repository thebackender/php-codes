<?php
	$connect = mysqli_connect("localhost", "root", "", "chat-messages-dividing-by-cookies");
	$message = $_POST['message'];
	$writer = $_POST['writer'];
	$sql = "INSERT INTO chat (message, writer) VALUES('$message', '$writer')";
	mysqli_query($connect, $sql);
	setcookie('name', $writer);
	echo "<script>window.location='index.php';</script>";
?>
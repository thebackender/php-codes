<?php
	$read = $_POST['read'];
	$user = $_COOKIE["user"];
	if ($read == "read") {
		$connect = mysqli_connect("localhost", "root", "", "read-unread-system");
		$sql = "UPDATE messages SET status=1 WHERE user <> '$user'";
		mysqli_query($connect, $sql);
	}
	header("Location: index.php");
?>
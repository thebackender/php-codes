<?php
	$user = $_POST['username'];
	echo $user;
	$connect = mysqli_connect('localhost', 'root', '', 'online-offline-system');
	$give_status_offline= "UPDATE `online_offline_status` SET status=0 WHERE username='".$user."'";
	mysqli_query($connect, $give_status_offline);
	$date = date('Y-m-d H:i:s');
	$give_last_seen = "UPDATE `online_offline_status` SET last_seen='".$date."' WHERE username='".$user."'";
	mysqli_query($connect, $give_last_seen);
	header('Location: index.php');
?>
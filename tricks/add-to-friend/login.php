<?php
	$connect = mysqli_connect("localhost", "root", "", "add-to-friend");
	$log = $_POST['log'];
	$sql = "SELECT * FROM `users`";
	$result = mysqli_query($connect, $sql);
	while ($row = mysqli_fetch_array($result)) {
		if ($log == $row['user']) {
			setcookie('user', $log);
			echo "<script>window.location='home.php';</script>";
		}
	}
	
?>
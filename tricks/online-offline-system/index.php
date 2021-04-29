<?php
	$connect = mysqli_connect('localhost', 'root', '', 'online-offline-system');
	$query = "SELECT * FROM `online_offline_status`";
	$result	= mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Offline</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		while ($row = mysqli_fetch_array($result)) {
			echo '
				<form action="home.php" method="POST">
					<p>'.$row["username"].'</p>
					<p>'.$row["last_seen"].'</p>
					<input type="hidden" value="'.$row["username"].'" name="username">
					<button type="submit">Login as '.$row["username"].'</button>
				</form>
			';
		}
	?>
	
</body>
</html>
<?php
	$user = $_POST['username'];

	$connect = mysqli_connect('localhost', 'root', '', 'online-offline-system');
	$query = "SELECT * FROM `online_offline_status` WHERE username <> '".$user."'";
	$result	= mysqli_query($connect, $query);

	$give_status_online = "UPDATE `online_offline_status` SET status=1 WHERE username='".$user."'";
	mysqli_query($connect, $give_status_online);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="logout.php" method="POST" class="online" id="sbar">
		<p>Your are <b id="status">Online</b> <?php echo $user; ?></p>
		<input type="hidden" value="<?php echo $user; ?>" name="username">
		<button type="submit">Logout</button>
	</form>
	<?php
		while ($row = mysqli_fetch_array($result)) {
			if ($row["status"] == 1) {
				echo '
					<div class="block">
						<p>'.$row["username"].'</p>
						<p class="online">Online</p>
					</div>
				';
			}else{
				echo '
					<div class="block">
						<p>'.$row["username"].'</p>
						<p class="offline">'.$row["last_seen"].' GMT +2</p>
						<p class="offline">Offline</p>
					</div>
				';
			}
			
		}
	?>
	<script src="script.js"></script>
</body>
</html>
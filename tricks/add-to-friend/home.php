<?php
	$connect = mysqli_connect("localhost", "root", "", "add-to-friend");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>	
	<header>You logged in as
		<?php
			if (isset($_COOKIE['user'])) {
				echo $_COOKIE['user'];
			}else{
				echo "<script>window.location='index.php';</script>";
			}
		?>
		(<a href="index.php">Logout</a>)
		<p id="forphp"></p>
	</header>
	<?php
		$sql = "SELECT * FROM `users`";
		$result = mysqli_query($connect, $sql);
		echo "<div id='margin'></div>";

		$sql4 = "SELECT * FROM `users` WHERE user='".$_COOKIE['user']."'";
		$result4 = mysqli_query($connect, $sql4);
		while ($row4 = mysqli_fetch_array($result4)) {
			$friends = explode("+",$row4["friends"]);
		}

		while ($row = mysqli_fetch_array($result)) {
			if ($row['user'] != $_COOKIE['user']) {
				if (in_array($row['user'], $friends)) {
					echo '
					<form action="" class="friend" method="POST">
						<p>'.$row["user"].'</p>
						<input type="hidden" name="friend" value="'.$row["user"].'">
						<p>Your friend</p>
					</form>
					';
				}else{
					echo '
					<form action="" class="friend" method="POST">
						<p>'.$row["user"].'</p>
						<input type="hidden" name="friend" value="'.$row["user"].'">
						<button type="submit">Add to friend</button>
					</form>
					';
				}
			}
		}
	?>
</body>
</html>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$sql2 = "SELECT * FROM `users` WHERE user='".$_COOKIE['user']."'";
		$result2 = mysqli_query($connect, $sql2);
		$friend = $_POST['friend'];
		while ($row2 = mysqli_fetch_array($result2)) {
			$friend = $_POST['friend'];
			$str = $row2['friends']."+".$friend;
			$sql3 = "UPDATE users SET friends='$str' WHERE user='".$_COOKIE['user']."'";
			mysqli_query($connect, $sql3);
			break;
		}
		echo "<script>window.location='home.php';</script>";
	}
?>
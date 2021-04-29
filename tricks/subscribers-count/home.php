<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "subscribers-count");
	$sql = "SELECT * FROM channels";
	$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Count Subscribers</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>	
	<?php
		if (isset($_SESSION["creator"])) {
			echo "<h3>You are logged in as ".$_SESSION["creator"]."</h3>";
		}else{
			echo "<h3>Please, first login</h3>";
		}
	?>
	<form method="POST">
		<select name="creator">
			<option value="0">Choose Account</option>
			<?php
				while ($row = mysqli_fetch_array($result)) {
					echo "<option value='".$row['creator']."'>".$row['creator']."</option>";
				}
			?>
		</select>
		<button type="submit">Login</button>
	</form>
	<?php
		if (isset($_SESSION["creator"])) {
			$sql2 = "SELECT * FROM channels WHERE creator='".$_SESSION["creator"]."'";
			$result2 = mysqli_query($connect, $sql2);
			while ($row2 = mysqli_fetch_array($result2)) {
				$subs = explode("+",$row2["subs"]);
				$count = count($subs) - 1;
				echo "You have ".$count." Subscribers";
				foreach ($subs as $value) {
					echo $value."<br>";
				}
			}
		}
	?>
	<a href="index.php"><h1>To Login As User</h1></a>
</body>
</html>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$creator = $_POST["creator"];
		$_SESSION["creator"] = $creator;
		echo "<script>window.location='home.php'</script>";
	}
?>
<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "subscribers-count");
	$sql = "SELECT * FROM channels";
	$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Subscribe</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="home.css">
</head>
<body>
	<?php
		if (isset($_SESSION["user"])) {
			echo "<h3>You are logged in as ".$_SESSION["user"]."</h3>";
		}else{
			echo "<h3>Please, first login</h3>";
		}
	?>
	<form method="POST">
		<select name="user">
			<option value="0">Choose Account</option>
			<option value="Mike">Mike</option>
			<option value="Abram">Abram</option>
			<option value="Face">Face</option>
			<option value="Alex">Alex</option>
			<option value="GAry">GAry</option>
			<option value="Lily">Lily</option>
			<option value="Opel">Opel</option>
			<option value="WAste">WAste</option>
			<option value="Qazaq">Qazaq</option>
			<option value="Hade">Hade</option>
			<option value="Dane">Dane</option>
			<option value="Kate">Kate</option>
			<option value="Luna">Luna</option>
			<option value="Red">Red</option>
			<option value="Vars">Vars</option>
			<option value="bare">bare</option>
			<option value="Zuck">Zuck</option>
			<option value="Mark">Mark</option>
			<option value="Steven">Steven</option>
		</select>
		<button type="submit">Login</button>
	</form>
	<?php
		if (isset($_SESSION["user"])) {
			while ($row = mysqli_fetch_array($result)) {
				$subs = explode("+",$row["subs"]);
				if (in_array($_SESSION['user'], $subs)) {
					echo '
					<form action="unsubscribe.php" method="POST" class="green">
						<p>'.$row['creator'].'</p>
						<input type="hidden" name="creator" value="'.$row['creator'].'">
						<input type="hidden" name="subs" value="'.$row['subs'].'">
						<input type="hidden" name="user" value="'.$_SESSION['user'].'">
						<button type="submit">Unsubscribe</button>
					</form>';
				}else{
					echo '
					<form action="subscribe.php" method="POST" class="red">
						<p>'.$row['creator'].'</p>
						<input type="hidden" name="creator" value="'.$row['creator'].'">
						<input type="hidden" name="subs" value="'.$row['subs'].'">
						<input type="hidden" name="user" value="'.$_SESSION['user'].'">
						<button type="submit">Subscribe</button>
					</form>';
				}
			}
		}
	?>
	<a href="home.php"><h1>To Login As Creator</h1></a>
</body>
</html>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user = $_POST["user"];
		$_SESSION["user"] = $user;
		echo "<script>window.location='index.php'</script>";
	}
?>
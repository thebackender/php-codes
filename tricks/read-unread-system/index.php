<?php
	$connect = mysqli_connect("localhost", "root", "", "read-unread-system");
	$sql = "SELECT * FROM messages";
	$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Read Unread</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<?php
			echo $_COOKIE['user'];
		?>
	</header>
	<div id="messages" style="display: flex; flex-direction: column; margin-bottom: 50px">
		<?php
			while ($row = mysqli_fetch_array($result)) {
				$user = $_COOKIE["user"];
				$sql2 = "UPDATE messages SET status=1 WHERE user <> '$user'";
				mysqli_query($connect, $sql2);
				if ($row['status'] == 0) {
					echo '
						<div class="message red">
							<p>'.$row["message"].'(Unread)</p>
							<p>'.$row["user"].'</p>
						</div>';
				}else{
					echo '
						<div class="message green">
							<p>'.$row["message"].'(Read)</p>
							<p>'.$row["user"].'</p>
						</div>';
				}
			}
		?>
	</div>
	<!--<form action="read.php" method="POST" style="margin: 10px">
		<input type="checkbox" name="read" value="read">
		<button type="submit">Mark as read</button>
	</form>-->
	<form action="post.php" method="POST" style="display: flex; flex-direction: column; width: 200px;margin-left: 10px">
		<select name="user" id="user">
			<option value="0">User?</option>
			<option value="Mike">Mike</option>
			<option value="Alex">Alex</option>
		</select>
		<textarea name="message" id="message" rows="4"></textarea>
		<button type="submit">Send</button>
	</form>
</body>
</html>
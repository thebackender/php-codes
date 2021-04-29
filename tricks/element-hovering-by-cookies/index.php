<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
	<style type="text/css">
		.echo{
			width: 200px;
			height: auto;
			text-align: center;
			line-height: 200px;
			font-family: sans-serif;
			font-weight: 600;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="text">
		<select name="color">
			<option value="0">Choose BG Color</option>
			<option value="red">Red</option>
			<option value="blue">Blue</option>
			<option value="green">Green</option>
			<option value="black">Black</option>
			<option value="orange">Orange</option>
		</select>
		<button type="submit">Save changes</button>
	</form>
	<a href="changes.php">To Changes</a>
	<h3>Cookies will Expire in 10seconds</h3>
	<br><br>
</body>
</html>
<?php
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		$text = $_POST['text'];//Cookie value
		$bg = $_POST['color'];//Cookie value
		//setcookie(name, value, expire, path, domain, secure, httponly);
		$text_cookie_name = "text";
		$bg_cookie_name = "bg";
		setcookie($text_cookie_name, $text, time() + 10);//
		setcookie($bg_cookie_name, $bg, time() + 10);
		header("Location: changes.php");
	}
	if (isset($_COOKIE["text"]) && isset($_COOKIE["bg"])) {
		echo "<div class='echo' style='background:".$_COOKIE['bg']."'>".$_COOKIE['text']."</div>";
	}
?>
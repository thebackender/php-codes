<?php
	if (isset($_COOKIE['user'])) {
	    setcookie('user', '', 1);
	    unset($_COOKIE['user']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Friend</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="signup.php" method="POST">
		<p>Sign Up</p>
		<i>Do not write users those already registered</i>
		<input type="text" name="user">
		<button type="submit">Done</button>
	</form>
	<form action="login.php" method="POST">
		<p>Log in</p>
		<input type="text" name="log">
		<button type="submit">Done</button>
	</form>
</body>
</html>
<?php
	session_start();
	$passcode = $_POST["code"];
	if ($_SESSION["code"]==$passcode) {
		echo "cool<br>";
		unset($_SESSION["code"]);
	}else{
		echo "<script>alert('Your code is not supposed. Please try again');window.location='index.php';</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
</head>
<body>
	Welcome to our website
</body>
</html>
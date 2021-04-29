<?php 
	session_start();
	$mail = $_POST["mail"];
	$sub = "Validation Code For Registration";
	$code = rand(1000,9999);
	$msg = "Your code is ".$code;

	mail($mail,$sub,$msg);
	$_SESSION["code"] = $code;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verify</title>
</head>
<body>
	<form action="success.php" method="POST">
		<input type="number" placeholder="write validation code" name="code">
		<button type="submit">Verificate me</button>
	</form>
</body>
</html>
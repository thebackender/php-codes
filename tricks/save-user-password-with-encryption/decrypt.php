<?php
	session_start();
	$isset = isset($_SESSION['password']) & isset($_SESSION['word']);
	if ($isset) {
		echo $_SESSION['password'].'<br>';
		echo $_SESSION['word'].'<br>';
	}else{
		echo "You dont have session for password<br> <a href='index.php'>To index page</a>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Decrypt</title>
</head>
<body>
	<form action="" method="POST">
		<input type="password" name="checkword">
		<button>Check</button>
	</form>
</body>
</html>
<?php
	if ($isset) {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$checkword = $_POST['checkword'];	
			if (md5($checkword) == $_SESSION['password']) {
				echo "Success<br>";
				echo md5($checkword);
				unset($_SESSION['password']);
				unset($_SESSION['word']);
			}else{
				echo "Fail";
			}
		}
	}
?>
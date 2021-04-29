<?php
	session_start();
	$mainpass = "test123";
	$md5pass = md5($mainpass);
	$sha1pass = sha1($mainpass);
	$cryptpass = crypt($mainpass, 'st');

	$superpassword = crypt(sha1(md5($mainpass)), 'salt');

	echo $mainpass."<br>";
	echo $md5pass."<br>";
	echo $sha1pass."<br>";
	echo $cryptpass."<br>";
	echo $superpassword."<br>";
	/*$input = "SmackFactory";

	$encrypted = encryptIt( $input );
	$decrypted = decryptIt( $encrypted );

	echo $encrypted . '<br />' . $decrypted;

	function encryptIt( $q ) {
	    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
	    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
	    return( $qEncoded );
	}

	function decryptIt( $q ) {
	    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
	    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
	    return( $qDecoded );
	}*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Save password</title>
</head>
<body>
	<form action="index.php" method="POST" style="margin-top: 50px">
		<input type="password" name="password">
		<button>Save</button>
	</form>
</body>
</html>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$password = $_POST['password'];
		$md5 = md5($password);
		$_SESSION['password'] = $md5;
		$_SESSION['word'] = $password;
		header('Location:decrypt.php');
	}
?>
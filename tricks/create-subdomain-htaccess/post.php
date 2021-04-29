<?php
	$segment = $_POST['segment'];
	if ($segment == '') {
		echo "Wrong";
	}else{
		$connect = mysqli_connect('localhost','root','','create-subdomain-htaccess');
		$query = "INSERT INTO url(segment) VALUES ('$segment')";
		mysqli_query($connect, $query);
		header('Location: index.php');
	}
	
?>
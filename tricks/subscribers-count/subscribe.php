<?php
	$user = $_POST["user"];
	$creator = $_POST["creator"];
	$subs = $_POST["subs"]."+".$user;
	$connect = mysqli_connect("localhost", "root", "", "subscribers-count");
	$sql = "UPDATE channels SET subs='$subs' WHERE creator='$creator'";
	mysqli_query($connect, $sql);
	echo "<script>window.location='index.php'</script>";
?>
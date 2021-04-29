<?php 
	if (isset($_COOKIE["text"]) && isset($_COOKIE["bg"])) {
		echo "<div class='echo' style='background:".$_COOKIE['bg']."'>".$_COOKIE['text']."</div>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Changes</title>
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
	<a href="index.php">To main</a>
</body>
</html>
<?php

	$connect = mysqli_connect('localhost','root','','create-subdomain-htaccess');
	$query = "SELECT * FROM url";
	$result = mysqli_query($connect, $query);

	//echo "Write http://localhost/create-subdomain-htaccess/products/category/45 in url to see result";
	//echo $_SERVER['PATH_INFO'];
	include 'classes/simpleUrl.php';
	$url = new simpleUrl('/create-subdomain-htaccess/');
	//echo $_SERVER['REQUEST_URI'];
	//echo $url->segment(1);
	if (!$url->segment(1)) {
		$page = 'home';
		echo '<form method="POST" action="post.php">
						<input type="text" name="segment"><br>
						<button type="submit">Add path_segment</button>
					</form>';
	}else{
		$page = $url->segment(1);
	}
	switch ($page) {
		case 'index.php' :
			echo "Home";
			echo '<form method="POST" action="post.php">
					<input type="text" name="segment"><br>
					<button type="submit">Add path_segment</button>
				</form>';
			break;
		default:
			echo "404 - page not found";
			break;
	}
	/*switch ($page) {
		case 'products':
			include 'template/products.php';
			break;
		case 'home':
			echo 'Home page';
		default:
			echo "404 page not found";
			break;
	}*/
	$array = array();
	echo "<br>";
	while ($row = mysqli_fetch_array($result)){
		
		array_push($array,$row["segment"]);
		/*if ($page == $row['segment']) {
			echo $row['segment'];
		}else{
			echo "404";
		}*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Segments</title>
</head>
<body>
	<?php 
			echo '<a href="http://localhost/create-subdomain-htaccess/'.$row['segment'].'/">'.$row['segment'].'</a><br>';
		}
		foreach ($array as $value) {
			switch ($page) {
				case $value:
					echo "<h1>".$value."</h1>";
					break;
			}
		}
		echo "<br><br>";
	?>
	<br>
	<a href="http://localhost/create-subdomain-htaccess/">To main</a><br>
	<br><br><br>
	
</body>
</html>	
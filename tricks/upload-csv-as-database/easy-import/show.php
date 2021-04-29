<?php
	$connect = mysqli_connect('localhost', 'root', '', 'upload-csv-as-database');
	$query = "SELECT * FROM `excel`";
	$result = mysqli_query($connect, $query);
	while ($row = mysqli_fetch_array($result)) {
		echo $row['excel_name']. " | ".$row['excel_email']."<br>";
	}
?>
<a href="index.php">To main</a>
<?php
	$connect = mysqli_connect('localhost', 'root', '', 'add-remove-input');
	$number = count($_POST["name"]);
	if ($number > 1) {
		for ($i=0; $i < $number; $i++) { 
			if (trim($_POST["name"][$i] != '')) {
				$sql = "INSERT INTO inputs(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
                mysqli_query($connect, $sql);  
			}
		}
		echo "Data Inserted";  
	}else{
		echo "Enter name";
	}
?>
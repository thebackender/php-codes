<?php
	$connect = mysqli_connect("localhost", "root", "", "chat-messages-dividing-by-cookies");
	$query = "SELECT * FROM chat";
	$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat divides Messages</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="messages" id="messages">
		<?php
			$height = 0;
			while ($row = mysqli_fetch_array($result)) {
				if (isset($_COOKIE['name'])) {
					if ($_COOKIE['name'] == $row["writer"]) {
						echo '
					      <div class="outer">
							<div class="message cookie">
								<p>'.$row["message"].'</p> <hr>
								<p class="title">'.$row["writer"].'</p>
							</div>
						</div>';
						$height = $height +1;
					}else{
						echo '
					      <div class="outer">
							<div class="message">
								<p>'.$row["message"].'</p> <hr>
								<p class="title">'.$row["writer"].'</p>
							</div>
						</div>';
						$height = $height +1;
					}
				}else{
					echo '
					      <div class="outer">
							<div class="message">
								<p>'.$row["message"].'</p> <hr>
								<p class="title">'.$row["writer"].'</p>
							</div>
						</div>';
						$height = $height +1;
				}
		      
		    }
			echo "<h1 align='center'>All Messages = ".$height."</h1>";
		?>
	</div>
	<div class="write">
		<form action="post.php" method="POST">
			<input type="text" name="message" placeholder="Type Message...">
			<input type="text" name="writer" placeholder="Type Your Cookie_Name...">
			<input type="submit" value="POST">
		</form>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>
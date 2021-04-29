<?php
	session_start();

	require_once("php/component.php");
	require_once("php/CreateDb.php");
	//create instance of CreateDb class
	$database = new CreateDb("Productdb", "Producttb");

	if (isset($_POST['add'])) {
		//print_r($_POST['product_id']);
		if (isset($_SESSION['cart'])) {
			$item_array_id = array_column($_SESSION['cart'], "product_id");

			if (in_array($_POST['product_id'], $item_array_id)) {
				echo "<script>alert('Product is already added');</script>";
				echo "<script>window.location='index.php';</script>";
			}else{
				$count = count($_SESSION['cart']);
				$item_array = array(
					'product_id' => $_POST['product_id']
				);
				$_SESSION['cart'][$count] = $item_array;
			}
		}else{
			$item_array = array(
				'product_id' => $_POST['product_id']
			);
			$_SESSION['cart'] = $item_array;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Shopping Card</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
		require_once("php/header.php");
	?>
	<div class="container">
		<div class="row text-center py-5">
			<?php
				$result = $database->getData();
				while ($row = mysqli_fetch_assoc($result)) {
					component($row["product_name"], $row["product_price"], $row["product_image"], $row["id"]);
				};
			?>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
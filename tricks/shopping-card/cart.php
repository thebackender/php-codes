<?php 
	session_start();
	require_once("php/CreateDb.php");
	require_once("php/component.php");
	$db = new CreateDb("Productdb", "Producttb");
	if (isset($_POST['remove'])) {
		if ($_GET['action']=='remove') {
			foreach ($_SESSION['cart'] as $key => $value) {
				if ($value['product_id']==$_GET['id']) {
					unset($_SESSION['cart'][$key]);
					echo '<script>alert("Product has been removed");</script>';
					echo '<script>window.location="cart.php"</script>';
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body class="bg-light">
	<?php
		require_once('php/header.php');
	?>
	<div class="container-fluid">
		<div class="row px-5">
			<div class="col-md-7">
				<div class="shopping-cart">
					<h6>My Cart</h6>
					<hr>
					<?php
						$total = 0;
						if (isset($_SESSION['cart'])) {
							$product_id = array_column($_SESSION["cart"], "product_id");
							$result = $db->getData();
							while ($row = mysqli_fetch_assoc($result)) {
								foreach ($product_id as $id) {
									if ($row['id']==$id) {
										cartElement($row['product_image'], $row['product_name'], $row["product_price"], $row['id']);
										$total = $total + (int)$row['product_price'];
									}
								}
							}
						}else{
							echo "<h5>Cart is empty</h5>";
						}

						
					?>
				</div>
			</div>
			<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
				<div class="pt-4">
					<h6>PRICE DETAILS</h6>
					<hr>
					<div class="row price-details">
						<div class="col-md-6">
							<?php 
								if(isset($_SESSION['cart'])){
									$count = count($_SESSION['cart']);
									echo "<h6>Price($count items)</h6>";
								}else{
									echo "<h6>Price(0 items)</h6>";
								}
							?>
							<h6>Delivery Charges</h6>
							<hr>
							<h6>Amount Payable</h6>
						</div>
						<div class="col-md-6">
							<h6>
								<?php
									echo "$".$total;
								?>
							</h6>
							<h6 class="text-success">FREE</h6>
							<hr>
							<h6>$<?php echo $total;?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Javascript preloader</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>
<body id="body">
    <div class="preloader">
    	<img src="images/preloader.gif" alt="">
    </div>
		<img id="img1" src="">
		<img id="img2" src="">
		<img id="img3" src="">
		<img id="img4" src="">
	<div class="loading">
		<!--<div class="loader" id="loader">
    		<img src="images/preloader.gif" alt="">
    	</div>-->
		<?php
			include 'form.php';
		?>
    </div>
	</div>
	<!--<iframe id="myFrame" src="https://api.jquery.com/load/"></iframe>
	<p id="demo"></p>-->
	<script>
		//document.getElementById("myFrame").onload = function() {myFunction()};

		function myFunction() {
		  //document.getElementById("demo").innerHTML = "Iframe is loaded.";
		}

		document.getElementById("form").onload = function() {myForm()};

		function myForm() {
		  document.getElementById("loader").style.display = "none";
		  alert(123);
		}
	</script>
    <script src="script.js"></script>
</body>
</html>
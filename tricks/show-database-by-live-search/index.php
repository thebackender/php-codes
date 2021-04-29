<!DOCTYPE html>
<html>
<head>
	<title>Ajax Live Data Search using Jquery PHP MySql</title>
	<script src="assets/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
	<script src="regex.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<div class="container">
		<br>
		<h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Search</span>
				<input type="text" name="search_text" id="search_text" placeholder="Search..." class="form-control">
			</div>
		</div>
		<br>
		<div id="result"></div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#search_text').keyup(function(){
			var txt = $(this).val();
			if (txt != "") {
				$.ajax({
					url:"fetch.php",
					method:"post",
					data:{search:txt},
					dataType:"text",
					success:function(data){
						$('#result').html(data);
					}
				});
			}else{
				$('#result').html("");
			}
		});
	});
</script>
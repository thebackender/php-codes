<!DOCTYPE html>
<html>
<head>
	<title>Add Remove Input</title>
	<link rel="stylesheet" href="assets/bootstrap.min.css">
	<script type="text/javascript" src="assets/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="container">
		<br><br>
		<h2 align="center">Add Remove Input</h2>
		<div class="form-group">
			<form name="add_name" id="add_name">
				<table class="table table-bordered" id="dynamic_field">
					<tr>
						<td><input type="text" name="name[]" id="name" class="form-control name_list" placeholder="Enter name"></td>
						<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
					</tr>
				</table>
				<input type="button" name="submit" id="submit" value="Submit" class="btn btn-info">
			</form>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		var i = 1;
		$('#add').click(function(){
			i++;
			$("#dynamic_field").append('<tr id="row"'+i+'><td><input type="text" name="name[]" id="name" class="form-control name_list" placeholder="Enter name"></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
		});
	});
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id");
		$("#row"+button_id+"").remove();
	});
	$("#submit").click(function(){
		$.ajax({
			url: "name.php",
			method: "POST",
			data: $('#add_name').serialize(),
			success: function(data){
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
</script>
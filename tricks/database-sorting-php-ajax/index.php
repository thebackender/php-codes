<?php
	$connect = mysqli_connect('localhost','root','','database-sorting-php-ajax');
	$query = "SELECT * FROM tbl_employee ORDER BY id ASC LIMIT 9";
	$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sorting</title>
	<script src="assets/bootstrap.min.js"></script>
	<script src="assets/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
	<br>
	<div class="container" style="width: 700px;" align="center">
		<h3 class="text-center">Ajax Database Sorting </h3><br>
		<div id="employee_table" class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th><a id="id" class="column_sort" data-order="desc" href="#">ID</a></th>
					<th><a id="name" class="column_sort" data-order="desc" href="#">Name</a></th>
					<th><a id="gender" class="column_sort" data-order="desc" href="#">Gender</a></th>
					<th><a id="designation" class="column_sort" data-order="desc" href="#">Designation</a></th>
					<th><a id="age" class="column_sort" data-order="desc" href="#">Age</a></th>
				</tr>
				<?php
					while ($row = mysqli_fetch_array($result)) {
				?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['designation']; ?></td>
					<td><?php echo $row['age']; ?></td>
				</tr>
				<?php		
					}
				?>
			</table>
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$(document).on('click', '.column_sort', function(){
			var column_name = $(this).attr('id');
			var order = $(this).data('order');
			var arrow = '';
			// glyphicon glyphicon-arrow-up | down
			if(order == 'desc'){
				arrow = '&nbsp; <img src="images/arrow-down.png" width="10px">';
			}else{
				arrow = '&nbsp; <img src="images/arrow-up.png" width="10px">';
			}

			$.ajax({
				url:"sort.php",
				method:"POST",
				data:{column_name:column_name, order:order},
				success:function(data){
					$('#employee_table').html(data);
					$('#'+column_name+'').append(arrow);
				}
			})
		});
	});
</script>
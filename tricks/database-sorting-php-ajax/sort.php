<?php
	$connect = mysqli_connect('localhost','root','','database-sorting-php-ajax');
	$output = '';
	$order = $_POST["order"];
	if ($order == 'desc') {
		$order = 'asc';
	}else{
		$order = 'desc';
	}
	$query = "SELECT * FROM tbl_employee ORDER BY ".$_POST['column_name']." ".$_POST['order']." LIMIT 9";
	$result = mysqli_query($connect, $query);
	$output .= '
		<table class="table table-bordered">
			<tr>
				<th><a id="id" class="column_sort" data-order="'.$order.'" href="#">ID</a></th>
				<th><a id="name" class="column_sort" data-order="'.$order.'" href="#">Name</a></th>
				<th><a id="gender" class="column_sort" data-order="'.$order.'" href="#">Gender</a></th>
				<th><a id="designation" class="column_sort" data-order="'.$order.'" href="#">Designation</a></th>
				<th><a id="age" class="column_sort" data-order="'.$order.'" href="#">Age</a></th>
			</tr>
	';
	while ($row = mysqli_fetch_array($result)) {
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["gender"].'</td>
				<td>'.$row["designation"].'</td>
				<td>'.$row["age"].'</td>
			</tr>
		';
	}
	$output .= '</table>';
	echo $output;
?>
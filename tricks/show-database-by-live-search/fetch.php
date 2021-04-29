<?php
	header("Content-Type:text/plain"); 
	$connect = mysqli_connect("localhost","root","","show-database-by-live-search");
	$output = '';
	$search = $_POST["search"];
	$sql = "SELECT * FROM tbl_customer WHERE CustomerName LIKE '%".$search."%' OR Address LIKE '%".$search."%' OR City LIKE '%".$search."%' OR PostalCode LIKE '%".$search."%' OR Country LIKE '%".$search."%' LIMIT 5";
	$result = mysqli_query($connect, $sql);
	if (mysqli_num_rows($result)>0) {
		$output .= '<h4 align="center">Search Result</h4>';
		$output .= 
		'<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th>CustomerName</th>
					<th>Address</th>
					<th>City</th>
					<th>Postal Code</th>	
					<th>Country</th>
				</tr>';
		while ($row = mysqli_fetch_array($result)) {
			$output .= 
			'<tr>
				<td>'.$row["CustomerName"].'</td>
				<td>'.$row["Address"].'</td>
				<td>'.$row["City"].'</td>
				<td>'.$row["PostalCode"].'</td>
				<td>'.$row["Country"].'</td>
			</tr>';
		}
		$output .= '</table></div>';
		echo $output;
	}else{
		echo "Data not Found";
	}
?>
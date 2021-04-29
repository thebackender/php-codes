<?php
	$results = array (  
		"0" => array(  
			"name"           => "Anna Smith",  
			"email_id"      => "annabsmith@inbound.plus"  
		),  
		"1" => array(  
			"name"           => "Johnny Huck",  
			"email_id" => "johnnyohuck@inbound.plus"  
		)  
	);
	$json = 's.json'; 
	$filename = "userData.csv";
	header("Content-Type: text/csv");
	header("Content-Disposition: attachment; filename=$filename");
	$output = fopen("php://output", "w");
	$header = array_keys($results[0]);
	fputcsv($output, $header);
	foreach ($results as $row) {
		fputcsv($output, $row);
	}
	fclose($output);
?>
<?php
	if(isset($_POST["limit"], $_POST["start"])){
	 	$connect = mysqli_connect("localhost", "root", "", "load-more-pagination-ajax");
	 	$query = "SELECT * FROM tbl_posts ORDER BY post_id ASC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
	 	$result = mysqli_query($connect, $query);
	 	while($row = mysqli_fetch_array($result)){
	  		echo '
			  <h3>'.$row["post_id"]." | ".$row["post_title"].'</h3>
			  <p>'.$row["post_id"]." | ".$row["post_description"].'</p>
			  <p class="text-muted" align="right">By - '.$row["post_id"]." | ".$row["post_author"].'</p>
			  <hr />
			 ';
	 	}
	}
?>
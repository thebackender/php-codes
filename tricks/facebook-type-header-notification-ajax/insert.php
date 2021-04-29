<?php
	if (isset($_POST['subject']) && isset($_POST['comment'])) {
		$connect = mysqli_connect('localhost','root','','facebook-type-header-notification-ajax');
		$subject = mysqli_real_escape_string($connect, $_POST['subject']);
		$comment = mysqli_real_escape_string($connect, $_POST['comment']);
		$query = "INSERT INTO comments(comment_subject, comment_text) VALUES ('$subject', '$comment')";
		mysqli_query($connect, $query);
	}
?>
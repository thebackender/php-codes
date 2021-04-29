<!DOCTYPE html>
<html>
<head>
	<title>Notification System</title>
	<link rel="stylesheet" href="assets/bootstrap.min.css">
	<script src="assets/jquery-3.5.1.min.js"></script>
	<script src="assets/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<div class="container">
		<br>
		<h2 align="center">Notification System</h2>
		<br>
		<nav class="navbar navbar-inverse" style="background: #333;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Webslesson Tutorial</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="label label-pill label-danger count"></span>
								Notification
							<ul class="dropdown-menu">
								
							</ul>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<br>
		<form method="POST" id="comment_form">
			<div class="form-group">
				<label>Enter Subject</label>
				<input type="text" name="subject" id="subject" class="form-control">
			</div>
			<div class="form-group">
				<label>Enter Comment</label>
				<textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" id="post" class="btn btn-info" value="POST">
			</div>
		</form>		
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		function load_unseen_notification(view = ''){
			$.ajax({
				url: "fetch.php",
				method: "POST",
				data: {view:view},
				dataType: "json",
				success:function(data){
					$('.dropdown-menu').html(data.notification);
					if (data.unseen_notification > 0) {
						$('.count').html(data.unseen_notification);
					}
				}
			})
		}
		load_unseen_notification();

		$('#comment_form').on('submit', function(event){
			event.preventDefault();
			if ($('#subject').val() != '' && $('#comment').val() != '') {
				var form_data = $(this).serialize();
				$.ajax({
					url: "insert.php",
					method: "POST",
					data:form_data,
					success:function(data){
						$('#comment_form')[0].reset();
						load_unseen_notification();
					}
				})
			}else{
				alert("Both Fields are Requiered");
			}
		});
		$(document).on('click', '.dropdown-toggle', function(){
			$('.count').html('');
			load_unseen_notification('yes');
			load_unseen_notification();
		});
		setInterval(function(){
			load_unseen_notification();
		}, 2000);
	});
</script>
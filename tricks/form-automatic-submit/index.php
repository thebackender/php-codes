<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="assets/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div>
   		<h1>Write usernames form database, then you can be able to log in</h1>
	   <input type="text" id="txt_username" name="txt_username" placeholder="Enter Username" />
	   <!-- Response -->
	   <div id="uname_response" ></div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){

	   $("#txt_username").keyup(function(){

	      var username = $(this).val().trim();

	      if(username != ''){

	         $.ajax({
	            url: 'ajaxfile.php',
	            type: 'post',
	            data: {username: username},
	            success: function(response){
	                $('#uname_response').html(response);
	             }
	         });
	      }else{
	         $("#uname_response").html("123");
	      }

	    });

	 });
</script>
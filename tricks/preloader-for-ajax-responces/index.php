<!DOCTYPE html>
<html>
<head>
	<title>Preloader for AJAX response</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
	<div class="container">
		<h4>AJAX Preloader</h4>
		<button id="getData" class="btn blue">FETCH DATA</button>
		<div id="loader" style="margin-top: 10px; display: none;">
			<!--<img src="ajax-loader.gif" alt="">-->
			<div class="progress">
				<div class="indeterminate">
					
				</div>
			</div>
		</div>
		<div id="result">
			
		</div>
	</div>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#getData').on('click', function(){
				$.ajax({
					type: 'GET',
					url: 'https://jsonplaceholder.typicode.com/users',
					dataType: 'json',
					beforeSend: function(){
						$('#loader').show();//until result load
					},
					complete: function(){
						$('#loader').hide();//after result load
					},
					success:function(data){
						var output = "";
						for(var i in data){
							output += `
								<ul>
									<li>Id ${data[i].id}</li>
									<li>Name ${data[i].name}</li>
									<li>Username ${data[i].username}</li>
								</ul>
							`;
						}
						$('#result').html(output);
						M.toast({
							html: 'Fetched success',
							classes: 'green'
						});
					},
					error:function(){
						$('#result').html("Something went wrong");//Works when internet turns off OR url errors
						M.toast({
							html: 'Failed',
							classes: 'red'
						});
					}
				});
			});
		});
	</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Read File JS</title>
</head>
<body>
	<p id="place"></p>
	<script type="text/javascript" src="script.js"></script>

	<!-- The `multiple` attribute lets users select multiple files. -->
	<input type="file" id="file-selector" multiple>
	<input type="file" id="file-selector" accept=".jpg, .jpeg, .png">
	<h4>See Console.log for Result</h4>
	<script>
	  const fileSelector = document.getElementById('file-selector');
	  fileSelector.addEventListener('change', (event) => {
	    const fileList = event.target.files;
	    console.log(fileList);
	  });
	</script>
</body>
</html>
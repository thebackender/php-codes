<!DOCTYPE html>
<html>
<head>
	<title>ZIP</title>
</head>
<body>
	<?php
		$zip = zip_open("zip-php.zip");

		if ($zip) {
		  while ($zip_entry = zip_read($zip)) {
		    echo "<p>";
		    // Get name of directory entry
		    echo "Name: " . zip_entry_name($zip_entry) . "<br>";
		    // Get compressed size
		    echo "Compressed size: " . zip_entry_compressedsize($zip_entry);
		    echo "</p>";
		  }
		  zip_close($zip);
		}
	?>
	<?php
		$zip = zip_open("zip-php.zip");

		if ($zip) {
		  while ($zip_entry = zip_read($zip)) {
		    echo "<p>Name: " . zip_entry_name($zip_entry) . "<br>";
		    // Open directory entry for reading
		    if (zip_entry_open($zip, $zip_entry)) {
		      echo "File Contents:<br>";
		      // Read open directory entry
		      $contents = zip_entry_read($zip_entry);
		      echo "$contents<br>";
		      zip_entry_close($zip_entry);
		    }
		  echo "</p>";
		  }
		zip_close($zip);
		}
	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>ZIP</title>
</head>
<body>
	<?php
		$archive = RarArchive::open('archive.rar');
		$entries = $archive->getEntries();
		foreach ($entries as $entry) {
		    $entry->extract('/extract/to/this/path');
		}
		$archive->close();
	?>
</body>
</html>
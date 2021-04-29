<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <script type="text/javascript">
    function readImage(file) {
    // Check if the file is an image.
    if (file.type && file.type.indexOf('image') === -1) {
      console.log('File is not an image.', file.type, file);
      return;
    }

    const reader = new FileReader();
    reader.addEventListener('load', (event) => {
      img.src = event.target.result;
    });
    reader.readAsDataURL(file);
  }
  </script>
</body>
</html>

<!-- Copyright 2018 Google LLC.
     SPDX-License-Identifier: Apache-2.0 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Custom drag-and-drop</title>
    <link rel="shortcut icon" 
          href="https://cdn.glitch.com/9b775a52-d700-4208-84e9-18578ee75266%2Ficon.jpeg?v=1585082912878">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/styles.css">
    <style>
      #file-selector {
        border: 5px dashed red;
        width: 440px;
        height: 272px;
      }
    </style>
  </head>
  <body>
    <h1>
      Custom drag-and-drop
    </h1>
    <div id="file-selector"></div>
    <ul id="output"></ul>
    <script>
      const fileSelector = document.getElementById('file-selector');
      const output = document.getElementById('output');
      if (window.FileList && window.File) {
        fileSelector.addEventListener('dragover', event => {
          event.stopPropagation();
          event.preventDefault();
          event.dataTransfer.dropEffect = 'copy';
        });
        fileSelector.addEventListener('drop', event => {
          output.innerHTML = '';
          event.stopPropagation();
          event.preventDefault();
          const files = event.dataTransfer.files;
          for (let i = 0; i < files.length; i++) {
            const li = document.createElement('li');
            const file = files[i];
            const name = file.name ? file.name : 'NOT SUPPORTED';
            const type = file.type ? file.type : 'NOT SUPPORTED';
            const size = file.size ? file.size : 'NOT SUPPORTED';
            li.textContent = `name: ${name}, type: ${type}, size: ${size}`;
            output.appendChild(li);
          }
        }); 
      }
    </script>
  </body>
</html>

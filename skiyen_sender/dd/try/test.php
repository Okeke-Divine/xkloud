<meta charset="utf-8">
<center>
  <h1>Php chunk</h1>
  <hr>
</center>
    <!DOCTYYPE html>
    <html>
      <head>
        <title>Chunking Upload Demo</title>
        <script src="plupload/js/plupload.full.min.js"></script>
        <script>
          window.addEventListener("load", function () {
            var path = "plupload/js/`";
            var uploader = new plupload.Uploader({
              browse_button: 'pickfiles',
              container: document.getElementById('container'),
              url: 'upload.php',
              chunk_size: '1000kb',
              max_retries: 2,
              filters: {
                max_file_size: '700mb',
                mime_types: [{title: "Video", extensions: "mp4,3gp,mov"}]
              },
              init: {
                PostInit: function () {
                  document.getElementById('filelist').innerHTML = '';
                },
                FilesAdded: function (up, files) {
                  plupload.each(files, function (file) {
                    document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                  });
                  uploader.start();
                },
                UploadProgress: function (up, file) {
                  document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
                },
                Error: function (up, err) {
                  // DO YOUR ERROR HANDLING!
                  console.log(err);
                }
              }
            });
            uploader.init();
          });
        </script>
      </head>
      <body>
        <div id="container">
          <span id="pickfiles">[Upload files]</span>
        </div>
        <div id="filelist">Your browser doesn't have Flash, Silverlight or HTML5 support.</div>
      </body>
    </html>
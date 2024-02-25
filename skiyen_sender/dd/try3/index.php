<!DOCTYPE html>
<html>
<head>
    <title>Drag and Drop File Upload using Dropzone JS and PHP - Rathorji.in</title>
    <script src="/js/jquery.js"></script>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link href="/bounch/dropzone.min.css" rel="stylesheet">
    <script src="/bounch/dropzone.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Drag and Drop File Upload using Dropzone JS and PHP - Rathorji.in</h2>
            <form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
                <div>
                    <h3>Drag and Drop File</h3>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Dropzone.options.imageUpload = {
    //     maxFilesize:10000,
    //     acceptedFiles: ".jpeg,.jpg,.png,.gif"
    // };
</script>

</body>
</html>
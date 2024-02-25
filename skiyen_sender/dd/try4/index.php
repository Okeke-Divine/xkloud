<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Muptiple Files</title> 
    </head>
    <body>
        <form action="uploadFiles.php" method="post" enctype="multipart/form-data">
            <div><input type="file" name="multiple_files[]" multiple></div> 
            <div><input type="submit" class="submit_button"></div>
        </form>
    </body>
</html>
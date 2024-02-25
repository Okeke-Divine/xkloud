<?php



function password_rand( $total = 6 ) 
    {
        $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $pass = substr( str_shuffle( $string ), 0, $total );
        
        return $pass;
    }
    
    $code = password_rand(20);

    $_SESSION['my_files_bool'] = $code;
    $my_files_bool = $_SESSION['my_files_bool'];
    $en = sha1($my_files_bool);
    

?>
    <script src="assets/jquery.js"></script>
    <link href="assets/alternate.css" rel="stylesheet">
    <script src="assets/alternate.js"></script>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="next" class="nextmkds"></div>
            <form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
                <!-- <div>
                    <center><h3>Click or drag to add files</h3>
                </div> -->
            </form>
            <span class="right"><button type="button" id="send" onclick="send_files();" class="btn btn-info text-light">
                <i class="fa fa-cloud-upload-alt"></i> Send
            </button></span>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Dropzone.options.imageUpload = {
    //     maxFilesize:10000,
    //     acceptedFiles: ".jpeg,.jpg,.png,.gif"
    // };
    function send_files(){
        var form = document.getElementById('image-upload');
        var send = document.getElementById('send');
        var next = document.getElementById('next');
        send.disabled = "disabled";
        form.style.display = "none";
        next.style.display = "block";
        next.innerHTML = "<span class='spinner spinner-grow text-info'></span>";
        var xhttp;
        xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                final();             
            }
          };
        xhttp.open("GET","ready.php?9dsfisd9igojtl=true", true);
        xhttp.send();
    }
    function final(){
          next.innerHTML = "<center><i class='fa fa-cloud-upload-alt fa-4x m-2'></i><br>All files successfully sent! Waiting for reciever... <br>File Code is <b><?php echo $code; ?></b><br><br><i>please recommended this site to your friends and family...</i></center>";
    }

</script>

</body>
</html>
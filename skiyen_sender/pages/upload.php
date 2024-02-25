    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font/css/all.css">
<?php
session_start();
include("../conn.php");
include("../ses.php");
$errors = array();
if(empty($ses_os)){
    $errors[] = 'os';
}
if(empty($ses_ip)){
    $errors[] = 'ip';
}
if(empty($ses_dev)){
    $errors[] = 'dev';
}
if(empty($ses_bro)){
    $errors[] = 'bro';
}
if(empty($errors)){


$target_dir = "../hFP1Ruaw0bq/$shal_ip/";
$fname = $site_name." (".date("hid").") - ".basename( $_FILES["file1"]["name"]);
if(empty($fname)){
    echo 'Select a file';
}else{
$file_id = $_POST['file_id'];
$file_cat = $_POST['file_cat'];

$target_file = $target_dir . $fname;

// upload ok set to 1
$uploadOk = 1;

// rename file
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    // if file exits
    echo "Sorry, file already exists.<br>Rename your file and try again<br>";
    $uploadOk = 0;
}
// Check file size
// if ($_FILES["file1"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

if ($uploadOk == 0) {
    // if everything is not ok
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {

        // success message include file name
        echo "The file <b>". $fname. "</b> has been sent. waiting for reciever...";

        // file id in php
        $fid = $file_id;

        // file url in php
        $furl = $base_domain."index.php?page=recieve-file&&t=".$fid;

        // give the user the file token
        echo '<br>Your file token is <b>'.$fid.'</b>. <i class="fa fa-copy" onclick="copy_ft()" style="cursor: pointer;"></i> <span id="file_ft_info"></span>';

        // give the user the file url
        echo '<br>Your file url is <b>'.$furl.'</b>  <i class="fa fa-copy" onclick="copy_ft1()" style="cursor: pointer;"></i> <span id="file_ft_info1"></span>';

        // store file info in database
        $save_info = mysqli_query($conn,"INSERT INTO $container VALUES('','$ses_ip','$ses_bro','$ses_dev','$fname','$file_cat','".sha1($file_id)."','$ses_os',UNIX_TIMESTAMP(),'0','$ses_cookie')");
        ?> 

        <!-- file token in html -->
        <input type="text" class="form-control" placeholder="File token" id="JQCMWWysIXb" name="ft" value="<?php echo $fid; ?>" style="opacity: 0;z-index: 0;">
         
        <!-- file url in html -->
        <input type="text" class="form-control" placeholder="File token" id="JQCMWWysIXb1" name="ft" value="<?php echo $furl; ?>" style="opacity: 0;z-index: 0;">
   

        <?php
    } else {
        // if file was not uploaded
        echo "Sorry, there was an error uploading your file.";
    }
}
}
    }else{
    echo "error";
    }
?>
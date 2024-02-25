<?php
session_start();
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


if(isset($_POST['file_id'])){
$file_id = $_POST['file_id'];
$file_cat = $_POST['file_cat'];

$filename = $_FILES["file1"] ["name"]; //the file name
$fileTmpLoc = $_FILES["file1"] ["tmp_name"]; //file in the php tmp oflder
$fileType = $_FILES["file1"] ["type"]; //the file type
$fileSize = $_FILES["file1"] ["size"]; //the size in byte
$fileErrorMsg = $_FILES["file1"] ["error"]; //0 for false 1 for true

if(!$fileTmpLoc){
    echo "Error : you can not upload an empty file, select a file and";
    exit();
}
if(move_uploaded_file(($fileTmpLoc), "../hFP1Ruaw0bq/".$ses_ip."/$filename")){
    echo "$filename upload complete";
} 
else{
    echo "Upload failed...";
}
}else{
    echo "Error....";
}
// 
// 
    }else{
    echo "error";
    }
?>
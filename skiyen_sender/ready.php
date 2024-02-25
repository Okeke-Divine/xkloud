<?php
	session_start();
	include("conn.php");
	include("ses.php");
 	$my_files_bool = $_SESSION['my_files_bool'];
    $en = sha1($my_files_bool);
    
	if(isset($_GET['9dsfisd9igojtl'])){
		// $sql = mysqli_query($conn,"UPDATE $container SET ready = '1' WHERE code = '$my_files_bool'");
    	$create_container = mysqli_query($conn,"INSERT INTO $container VALUES('',UNIX_TIMESTAMP(),'1','$en','$ses_cookie')");
	}else{
		header("location:index.php");
	}

?>
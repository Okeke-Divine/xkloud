<?php
	session_start();
	include("conn.php");
 	$my_files_bool = sha1($_SESSION['my_files_bool']);
 	
	if(isset($_FILES)){
		mkdir('hFP1Ruaw0bq/'.$my_files_bool."/");
		$uploadDir = 'hFP1Ruaw0bq/'.$my_files_bool."/";

		if (!empty($_FILES)) {
		 	$tmpFile = $_FILES['file']['tmp_name'];
		 	$fname = $_FILES['file']['name'];
		 	$ft = $_FILES['file']['type'];
		 	// $filename = $uploadDir.'/'.time().'-'. $_FILES['file']['name'];
		 	$filename = $uploadDir.'/'. $_FILES['file']['name'];
			 if(move_uploaded_file($tmpFile,$filename)){
			    $create_container = mysqli_query($conn,"INSERT INTO $files VALUES('','$fname','$ft','$my_files_bool')");
			 }
		}
	}else{
		header("location:index.php");
	}

?>
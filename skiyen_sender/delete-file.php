<?php

	session_start();
	include("conn.php");
	include("ses.php");

	if(isset($_GET['rcid'])){
		@$rcid = $_GET['rcid'];
		$find_file = mysqli_query($conn,"SELECT * FROM $container WHERE id = '$rcid'");
			while($row = mysqli_fetch_array($find_file)){
				$file_name = $row['file_name'];
				$rcip = sha1($row['ip']);
				unlink("hFP1Ruaw0bq/$rcip/$file_name");
				mysqli_query($conn,"DELETE FROM $container WHERE id = $rcid");
			}
	}

?>
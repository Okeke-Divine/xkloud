<link rel="shortcut icon" type="img/png" href="/logo/xkloud.png">
<?php

	include("conn_helper.php");

	$conn_skiyen = mysqli_connect('localhost','root','','skiyenmain') or die("Error Connecting to skiyen");

	$conn = mysqli_connect('localhost','root','','skiyen_drive_xkloud');

?>
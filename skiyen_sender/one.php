<?php
	session_start();
	$_SESSION['a'] = rand();
	echo $_SESSION['a'];
?>
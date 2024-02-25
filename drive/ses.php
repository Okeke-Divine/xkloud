<?php
	session_start();
	$ses_id = $_SESSION['jsofj93j9JOj0ip'];
	$ses_uname = $_SESSION['uh9hUIhlh8ol'];
	$ses_email = $_SESSION['pho8hphp9hphpohp9IPHP'];
	if(empty($ses_id) || empty($ses_uname) || empty($ses_email)){
		echo '<script>window.location = "/login?not_logged_in=true";</script>';
		die();
	}
?>
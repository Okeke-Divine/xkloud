	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
<?php 
	 include("ip_info.php");

	 /**
	 * @author  Okeke Divine-Vessel
	 * @version 1.0
	 */
	 include("conn.php");
	 include("css.php");
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		if($page == "home"){
			$page_to_include = "home.php";
		}else if($page == "send"){
			$page_to_include = "send.php";
		}else if($page == "recieve"){
			$page_to_include = "recieve.php";
		}else if($page == "history"){
			$page_to_include = "history.php";
		}else{
			$page_to_include = "error.php";
		}
	}else{
		$page = "home";
		$page_to_include = "home.php";
	}

	session_start();
		$ip = UserInfo::get_ip();	
		$dev = UserInfo::get_device();
		$os = UserInfo::get_os();
		$bro = UserInfo::get_browser();
		$_SESSION['skiyen_user_os'] = $os;
		$_SESSION['skiyen_user_ip'] = $ip;
		$_SESSION['skiyen_user_dev'] = $dev;
		$_SESSION['skiyen_user_bro'] = $bro;
	include("ses.php");
	include("pages/headers.php");
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="robots" content="index,follow">
	<meta name="googlebot" content="index,follow">
	<link rel="shortcut icon" type="img/png" href="http://web-skiyen.rf.gd/logo/s1.png">
	<meta name="author" content="Okeke Divine-Vessel">
	<meta name="description" content="<?php echo $site_name; ?> - Send large files over the internet from any location to another e.g. Nigeria To London with less data... :-)">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="width">
	<meta name="robots" content="index,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $site_name; ?></title>
</head>
<body>


<div class="show_left p-2" id="show_left">
  <span class="right pointer fa-2x" onclick="hide_left()">&times;</span>
  <br>
  	<center>
  		<i class="fa fa-user-circle" style="font-size: 80px;"></i><br>
  		<br>
  		<hr>

  		<div class="wd100 p-4 border-bottom mb-2 text-left oosh" onclick="window.location = '?page=home';">
  			<i class="fa fa-home"></i> Home
  		</div>


  		<div class="wd100 p-4 border-bottom mb-2 text-left oosh" onclick="window.location = '?page=send';">
  			<i class="fa fa-cloud-upload-alt"></i> Send File
  		</div>

  		<div class="wd100 p-4 border-bottom mb-2 text-left oosh" onclick="window.location = '?page=recieve';">
  			<i class="fa fa-cloud-download-alt"></i> Recieve File
  		</div>

		<div class="wd100 p-4 border-bottom mb-2 text-left oosh" onclick="window.location = '?page=history';">
  			<i class="fa fa-history"></i> History
  		</div>

  		<div class="wd100 p-3 border-bottom mb-2 text-left">
  			<b>Update</b><Br>
  			<span class="text-grey">Current Version: 2.0.5</span>
  		</div>

	</center>

</div>


<div class="page_content" id="page_content">

<?php

	include("pages/".$page_to_include);
	
	
?>
<br>




</div>

<div class="text-dark text-center mb-5" style="display: block;">
	<i>from</i><br><b><a class="text-dark" target="_blank" style="text-decoration: none;" href="http://web-skiyen.rf.gd">SKIYEN</a></b>

</div>


</body>
</html>


 	
 <script type="text/javascript">
 	function show_left(){
 		var show_left = document.getElementById('show_left');
 		show_left.style.transition = "0.5s";
 		show_left.style.opacity = "1";
 		show_left.style.left = "0px";
 	}
 	function hide_left(){
 		var show_left = document.getElementById('show_left');
 		show_left.style.transition = "0.5s";
 		show_left.style.opacity = "0";
 		show_left.style.left = "-300px";	
 	}
 </script>
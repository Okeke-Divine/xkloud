<?php
include("conn.php");
include("css.php");
function admin_login($type){
	if($type == "access denied"){
		$say = "<div class='alert alert-danger'>Access Denied</div>";
	}else{
		$say = "";
	}
	$html = '<!-- admin login -->
		<form method="POST" class="mt-5 text-center">
			<i class="fa fa-user-circle fa-10x"></i><br>
			'.$say.'
			<h3>Admin Login</h3>
			<input type="password" placeholder="Password..." name="osdkfoskdfoskdofksodkfgosdkfogkodsfkgsdf" class="form-control">
			<button class="mt-1 btn btn-primary" name="login" type="submit">Login</button>
		</form>';
		return $html;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - <?php echo $site_name; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<meta name="author" content="Okeke Divine-Vessel">
	<meta name="description" content="Send large files iver the internet from any location to another">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-startup-image" href="/splash-startup.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="width">
 	 <script type="text/javascript" src="js/jquery.js"></script>
 	 <script type="text/javascript" src="js/jquery.timeago.js"></script>
	<meta name="robots" content="index,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
</head>
<body>

<div id="navbar" class="bg-dark text-light">
				<?php echo $site_name; ?> - admin
</div>


	<main class="container" role="main">

<?php

	if(isset($_POST['osdkfoskdfoskdofksodkfgosdkfogkodsfkgsdf'])){
		$psw = $_POST['osdkfoskdfoskdofksodkfgosdkfogkodsfkgsdf'];
		
		if($psw == "lessevenivid1234"){
			if(isset($_COOKIE[$cookie_admin])){}else{
				echo "unauthorized user...";
			}
		?>
			
		<?php
			$find_file = mysqli_query($conn,"SELECT * FROM $container");
			while($row = mysqli_fetch_array($find_file)){
				$file_cat = $row['file_cat'];
				$file_name = $row['file_name'];
				$ip = $row['ip'];
				$id = $row['id']; 
				$downloaders = $row['downloaders'];
    			$td = date("Y-m-d"." "."H:i:s",$row['time']);
				if($file_cat == "file"){
					$fa = "fa-file";
				}else if($file_cat == "music"){
					$fa = "fa-file-audio";
				}else if($file_cat == "image"){
					$fa = "fa-file-image";
				}
				else if($file_cat == "video"){
					$fa = "fa-file-video";
				}
				else if($file_cat == "document"){
					$fa = "fa-file-word";
				}
				else{
					$fa = "fa-file";
				}
				?>

				<section id="<?php echo $id; ?>" class="post_area">
		      <div class="text">
		      			<i class="fa <?php echo $fa; ?>" style="font-size: 30px;"></i>
		      			<span class="somsd">File : <?php echo $file_name; ?></span><br>
	<span class="somsd">File type : <?php echo $file_cat; ?></span><br>
	<!-- <span class="somsd"><?php echo $downloaders; ?> downloads</span><br> --><time style="font-size: 15px;" class="timeago" datetime="<?php echo $td; ?>"><?php echo $td; ?></time>
	<br>
	<button class="btn btn-danger" onclick="delete_file('<?php echo $id; ?>');">Delete</button>
		      </div>
		    </section>

				<?php
			}
		}else{
			echo admin_login('access denied');
		}
	}else{
		echo admin_login('page_loaded');
	}

?>
	</main>



</body>
</html>
<script type="text/javascript">
  jQuery(document).ready(function(){
    $("time.timeago").timeago();
  });
</script>
<script type="text/javascript">
	function delete_file(id){
		var xhttp = new XMLHttpRequest();
		document.getElementById(id).innerHTML = "";
		xhttp.open("POST","delete-file.php?rcid="+id,true)
		xhttp.send();
	}
</script>
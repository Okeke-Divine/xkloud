<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include("ses.php"); ?>
	<?php include("../conn.php"); ?>
	<?php include("css-inner.php"); ?>
	<?php include("js-inner.php"); ?>
	<title><?php echo $ses_uname; ?> | <?php echo $site_name; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/w3/css/w3.css">
	<link rel="stylesheet" href="/css/w3/css/w3colors.css">
	<link rel="stylesheet" href="/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="/font/css/all.css">
	<link rel="stylesheet" href="/font/css/brands.css">
	<link rel="stylesheet" href="/font/css/fontawesome.css">
	<link rel="stylesheet" href="/font/css/regular.css">
	<link rel="stylesheet" href="/font/css/solid.css">
	<link rel="stylesheet" href="/font/css/svg-with-js.css">
	<link rel="stylesheet" href="/font/css/v4-shims.css">
</head>
<body>



	<div class="dsfsdf" data-define="Desktop" id="Desktop">
		


		<div class="text-white top_bar" id="top_bardfgfd">
			<span><?php echo $site_name; ?></span> 
			<span class="dsfsdfij4t8">|</span> 
		</div>


		<div class="content10">
			
			
				<br>
				<br>
				<br>
				<br>
				<div id="desktop_content" class="desktop_content container wd100">
					<?php include("desktop-content.php"); ?>
					<?php include("xkloud-explorer.php"); ?>
				</div>

		</div>

		<div class="bottom_bar" id="bottom_bar">

			<div class="start_button pointer" onclick="open_start();"><i class="fa fa-th" style="color: white;"></i></div>	

			<div class="task_bar">
				<span class="pointer" onclick="open_explorer();" style="margin-left: 10px;margin-right: 10px;"><i class="fa fa-folder"></i></span>
				<span class="pointer" style="margin-right: 10px;"><i class="fa fa-cog"></i></span>
			</div>


		</div>

	</div>


	<div class="start_menu" data-define="StartMenu" id="StartMenu">
		
			<span class="pointer dfgdfg"><i class="fa fa-2x fa-user-circle"></i></span>

		<div class="close_start start_button pointer" id="close_start" onclick="close_start();"><i class="fa fa-th" style="color: white;"></i></div>	


		<br>
		<br>
		<br>
		<h1 class="text-white dfdsfo">Start</h1>

		<div class="dsf">

			<div class="sd0fis9df">
				<div class="ojdsf w3-container pointer text-white connd1 start_pink">
					<div class="w3-center">
						<br>
						<i class="fa fa-cog fa-4x mt-2"></i><br>
					</div>
					<div class="w3-left">
						<span class="sdfojodsfsdf">Settings</span>
					</div>
				</div>
				<div class="ojdsf w3-container pointer text-white connd1 start_green" onclick="open_explorer_from_start()">
					<div class="w3-center">
						<br>
						<i class="fa fa-folder fa-4x mt-2"></i><br>
					</div>
					<div class="w3-left">
						<span class="sdfojodsfsdf">Folder</span>
					</div>
				</div>
				<div onclick="open_web('https://dailypost.ng/');" class="ojdsf w3-container pointer text-white connd1 start_pink">
					<div class="w3-center">
						<br>
						<i class="fa fa-newspaper fa-4x mt-2"></i><br>
					</div>
					<div class="w3-left">
						<span class="sdfojodsfsdf">News</span>
					</div>
				</div>
			</div>

			<div class="sd0fis9df1">
				<div onclick="open_web('http://web-skiyen.rf.gd');" class="ojdsf pointer text-white w3-container connd2 start_red">
					<div class="w3-center">
						<img src="/logo/skiyen.png" alt="Skiyen" style="width: 100px;height: 70px;position: relative;top:10px;"><br>
					</div>
					<div class="w3-left">
						<span class="sdfojodsfsdf">Skiyen <i class="fa fa-external-link-alt"></i></span>
					</div>
				</div>
				

			</div>

		</div>

	</div>



<?php
	include("js-bottom.php");
?>
</body>
</html>
<style type="text/css">
	html,body{
		margin: 0!important;
		padding: 0!important;
		overflow: hidden!important;
	}
</style>
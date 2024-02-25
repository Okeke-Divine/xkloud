<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <?php include("conn.php"); ?>
  <?php include("css.php"); ?>
  <?php include("js.php"); ?>
  <?php include("links.php"); ?>
  <title><?php echo $site_name; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3/css/w3.css">
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
</head>

<body style="background: #f9f9f9!important;">
  
	<div class="w3-container w3-third"></div>
	<div class="w3-container w3-third">
		<br>
		<br>
		<br>
		<div class="w3-center bg-white fdsfsd pointer" onclick="goto('<?php echo $skiyen_register_on_xcloud; ?>');" style="padding: 5px;">
			<br>
			<img src="logo/skiyen.png" alt="Skiyen" style="width: 200px;height: 100px;">
			<h4>Register on Skiyen</h4>
			<span>Once you have an account on <b>Skiyen</b> you will have automatic access to all our services.</span>
			<br>
				<a href="/login">Already have an account</a>
			<br>
			<br>

		</div>
	</div>
	<div class="w3-container w3-third"></div>

</body>
</html>
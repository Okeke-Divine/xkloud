<!DOCTYPE html>
<html>
<head>
  <?php include("conn.php"); ?>
  <?php include("css.php"); ?>
  <?php include("js.php"); ?>
  <?php include("links.php"); ?>
	<title>Sign In | <?php echo $site_name; ?></title>
	<link rel="stylesheet" href="css/material-design-iconic-font.css">
	<link rel="stylesheet" href="css/reg.css">
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="font/css/all.css">
</head>
<body>
<div class="main">



<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-image">
<figure><img src="logo/signin-image.jpg" alt="sing in image"></figure>
<a href="register" class="signup-image-link">Create an account</a>
</div>
<div class="signin-form">

	<?php

	if(isset($_GET['not_logged_in'])){
		?>
		<div class="alert alert-danger">
			Please login to continue.
		</div>
		<?php
	}


	if(isset($_POST['signin'])){
		$your_uname = $_POST['your_uname'];
		$your_pass = $_POST['your_pass'];
		$md5_pass = md5(sha1($your_pass));


		$verify_user_if_user_is_on_skiyen = mysqli_query($conn_skiyen,"SELECT * FROM $skiyen_users WHERE username = '$your_uname' AND password = '$md5_pass'");

		if(mysqli_num_rows($verify_user_if_user_is_on_skiyen) > 0){


			while($skiyen_user_rows = mysqli_fetch_array($verify_user_if_user_is_on_skiyen)){
				$skiyen_user_id = $skiyen_user_rows['user_id'];
				$skiyen_user_name = $skiyen_user_rows['username'];
				$skiyen_user_email = $skiyen_user_rows['email'];
			}

			$check_if_user_is_recognized_on_xkloud = mysqli_query($conn,"SELECT * FROM $xkloud_users WHERE user_id = '$skiyen_user_id'");
			if(mysqli_num_rows($check_if_user_is_recognized_on_xkloud) > 0){}else{

					mysqli_query($conn,"INSERT INTO $xkloud_users (`user_id`) VALUES ('$skiyen_user_id')");

				}

			session_start();
			$_SESSION['jsofj93j9JOj0ip'] = $skiyen_user_id;
			$_SESSION['uh9hUIhlh8ol'] = $skiyen_user_name;
			$_SESSION['pho8hphp9hphpohp9IPHP'] = $skiyen_user_email;

			header("location:drive/");

		}else{
			?>
			<div class="alert alert-danger">
				Invalid Login.
			</div>
			<?php
		}

	}else{
		$your_uname = "";
	}

	?>

<h2 class="form-title">Sign In</h2>
<form method="POST" class="register-form" id="login-form">
<div class="form-group">

<label for="your_uname"><i class="fa fa-user"></i></label>
<input type="text" name="your_uname" id="your_uname" placeholder="Your Username" required="" value="<?php echo $your_uname; ?>">
</div>

<div class="form-group">
<label for="your_pass"><i class="fa fa-lock"></i></label>
<input type="password" name="your_pass" id="your_pass" placeholder="Password" required="">
</div>


<div class="form-group form-button">
<input type="submit" name="signin" id="signin" class="form-submit" value="Log in">
</div>
</form>
<!-- <div class="social-login">
<span class="social-label">Or login with</span>
<ul class="socials">
<li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
<li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
<li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
</ul> -->
</div>
</div>
</div>
</div>
</section>
</div>


</body></html>
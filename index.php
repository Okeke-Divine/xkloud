<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<?php include("conn.php"); ?>
<title><?php echo $site_name; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3/css/w3.css">
<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="font/css/all.css">
<link rel="stylesheet" href="font/css/brands.css">
<link rel="stylesheet" href="font/css/fontawesome.css">
<link rel="stylesheet" href="font/css/regular.css">
<link rel="stylesheet" href="font/css/solid.css">
<link rel="stylesheet" href="font/css/svg-with-js.css">
<link rel="stylesheet" href="font/css/v4-shims.css">

	<?php include("css.php"); ?>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("logo/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">
      <img src="logo/xkloud.png" style="width: 50px;height: 25px;" src="xkloud">
    </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small fdfs">
      <button class="btn btn-outline-info text-hover-white" onclick="register();"><i class="fa fa-user-plus"></i> Register</button>
      <button class="btn" onclick="login();" style="background: #2196f3;color: white;"><i class="fa fa-lock"></i> Login</button>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">&times;</a>
 <a class="w3-bar-item w3-button w3-large w3-padding-16" href="javascript:void(0)" onclick="register();"><i class="fa fa-user-plus"></i> Register</a>
 <a class="w3-bar-item w3-button w3-large w3-padding-16" href="javascript:void(0)" onclick="login();"><i class="fa fa-lock"></i> Login</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Xkloud</span><br>
    <span class="w3-large">Keep all your files in on place</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start using Xkloud today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE APP</h3>
  <p class="w3-center w3-large">Key features of this app</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>Well arranged on all kinds of devices.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-sync w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Portability</p>
      <p>Access your files anywhere you go.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Customisable</p>
      <p>Change desktop backgrounds, text fonts and lots more...</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-upload w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Functionality</p>
      <p>Upload large files with high speed.</p>
    </div>
  </div>
</div>


<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-third">
    <span class="w3-xxlarge">2+</span>
    <br>Partners
  </div>
  <div class="w3-third">
    <span class="w3-xxlarge">4.5GB+</span>
    <br>Disk Size(free)
  </div>
  <div class="w3-third">
    <span class="w3-xxlarge">999+</span>
    <br>Happy Clients
  </div>
 
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-snapchat"></i>
    <i class="fa fa-pinterest-p"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-linkedin"></i>
  </div>
  <p>Powered by <a href="http://web-skiyen.rf.gd/" title="Skiyen" target="_blank" class="w3-hover-text-green">Skiyen</a></p>
</footer>
 
<?php include("js.php"); ?>

</body>
</html>

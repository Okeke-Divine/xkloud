<?php 

	// if(isset($_GET['token'])){
	// 	$token = $_GET['token']; 
	// }else{
	// 	$token = NULL;
	// }
	$token = @$_GET['token'];
	$sha1_token = sha1($token);
?>
<br>
<main class="container" role="main">
	<form><input type="hidden" name="page" value="recieve"><input type="text" name="token" class="form-control" value="<?php echo $token; ?>" placeholder="Input File Code and press enter..."></form>

<?php

	if(!empty($token)){
		?><hr><?php
		$check = mysqli_query($conn,"SELECT * FROM $container WHERE code = '$sha1_token' and ready = '1'");
		if(mysqli_num_rows($check) > 0){

			$files = mysqli_query($conn,"SELECT * FROM $files WHERE code = '$sha1_token'");
			?><?php
			echo "<div class='flexex'>";
			while($row1 = mysqli_fetch_array($files)){
				$fid = $row1['id'];
				$fname = $row1['file_name'];
				$ft = $row1['file_type'];	
				$fdir = "hFP1Ruaw0bq/".$sha1_token."/".$fname;
				?>
				<div class="p-3 shadow-sm m-2">
					<center>
					<?php

					if($ft == "image/png"){
						echo "<div class='ofd img-thumbnail'><img src='".$fdir."'></div>";
					}else{
						echo "<i class='fa fa-file fa-2x'></i><br>";
					}

					?>
					<b><?php echo $fname; ?></b></center>
					<a class="btn btn links" download="" href="<?php echo $fdir; ?>"><i class="fa fa-download"></i> Download</a>
				</div>
				<?php
			}
			echo '</div>';

			?>

			<?php

		}else{
			?>
				<div class="alert alert-danger">The file(s) do not exits, please check the spelling (case sensitive) and try again.</div>
			<?php
		}
	}

?>
<br><i>please recommended this site to your friends and family...</i>
</main>

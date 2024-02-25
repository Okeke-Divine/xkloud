<br>

<main class="container" role="main">
	
	<?php
	include("conn.php");


	if(isset($_GET['t'])){
		$t = $_GET['t'];
		$find_file = mysqli_query($conn,"SELECT * FROM $container WHERE fil_id = '".sha1($t)."' ORDER BY id DESC LIMIT 0,1");

		if(mysqli_fetch_assoc($find_file)){
		$find_file = mysqli_query($conn,"SELECT * FROM $container WHERE fil_id = '".sha1($t)."' ORDER BY id DESC LIMIT 0,1");
			while($row = mysqli_fetch_array($find_file)){
				$file_cat = $row['file_cat'];
				$file_name = $row['file_name'];
				$ip = $row['ip'];
				$downloaders = $row['downloaders'];
				$time = $row['time'];
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
			 <section class="post_area">
		      <div class="text">
		      		<center>
		      			<i class="fa <?php echo $fa; ?>" style="font-size: 30px;"></i>
		      			<?php

		      			$rand = rand();
		      			include("filer.php")

		      			?>
		      		</center>
		      </div>
		    </section>
		    <script type="text/javascript">
		    	download_file('<?php echo $file_name; ?>','<?php echo sha1($ip); ?>');
		    </script>
			<?php
		}
		}else{
			?>
			<i class="fa fa-file"></i> File not found <a href="index.php?page=recieve-file">Try again</a>
			<?php
		}


	}else{
		?>

		<input type="text" name="token" id="token" placeholder="Input file token..." class="form-control">
		<button onclick="tokenalise()" class="btn mt-2 btn-primary"><i class="fa fa-cloud-download-alt"></i> Check and download.</button>
		<script type="text/javascript">
			function tokenalise(){
				var token = document.getElementById('token').value;
				window.location = "index.php?page=recieve-file&&t="+token;
			}
		</script>
		<?php
	}

	?>

</main>

<br>

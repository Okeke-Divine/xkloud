
<br>

<main class="container" role="main">


	<b>My History</b> (histories are automatically deleted after 15 days)<br>
	<hr>
	<?php


	$get_containers = mysqli_query($conn,"SELECT * FROM $container WHERE cookie = '$_COOKIE[$cookie_v]' ORDER BY id DESC");
	while($row = mysqli_fetch_array($get_containers)){
		$con_id = $row['id'];
		$con_code = $row['code'];
		echo $con_code;
	}


	?>
	

</main>


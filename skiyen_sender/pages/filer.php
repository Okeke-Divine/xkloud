<?php

if(!empty($rand)){

	?>
<br>
	<span class="somsd">File : <?php echo $file_name; ?></span><br>
	<span class="somsd">File type : <?php echo $file_cat; ?></span><br>
	<!-- <span class="somsd"><?php echo $downloaders; ?> downloads</span><br> -->

<span id="download_info" style="display: none;">
		<a id="anchor" style="display: none;" download="<?php echo $file_name; ?>" class="btn text-primary"><i class="fa fa-save"></i> Save file</a>
<progress value="0" id="progress" max=""></progress>
<br>
<span id="progress_text">0%</span> | <span id="remaining">0 minutes o seconds remaining...</span>
	</span>
	<button class="btn btn-secondary" style="display: none;" id="d_id" onclick="download_file('<?php echo $file_name; ?>','<?php echo sha1($ip); ?>');"><i class="fa fa-cloud-download-alt"></i> Retry Download</button>

	<script type="text/javascript">
		function download_file(file_name,ip){
document.getElementById("download_info").style.display = "block";
document.getElementById("d_id").style.display = "block";
var ajax = new XMLHttpRequest();
	ajax.responseType = "blob";
	ajax.open("GET","hFP1Ruaw0bq/"+ip+"/<?php echo $file_name; ?>",true);
	ajax.send();

	var progress = document.getElementById("progress");
	var progressText = document.getElementById("progress_text");
	var remaining = document.getElementById("remaining");

	var start = new Date().getTime();

	ajax.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var obj = window.URL.createObjectURL(this.response);

			document.getElementById("anchor").setAttribute("href", obj);
			document.getElementById("anchor").style.display = "block";
			document.getElementById("anchor").click();
			document.getElementById("anchor").style.display = "none";

			setTimeout(function () {
				window.URL.revokeObject(obj);
			}, 60 * 1000);
			document.getElementById("d_id").style.display = "none";
			document.getElementById("progress").style.display = "none";
			remaining.innerHTML = "Loading complete";
		}
	};
	ajax.onprogress = function (e) {
		progress.max = e.total;
		progress.value = e.loaded;

		var percent = (e.loaded / e.total) * 100;
		percent = Math.floor(percent);
		progressText.innerHTML = percent + "%";

		var end = new Date().getTime();
		var duration = (end - start) / 1000;
		var bps = e.loaded / duration;
		var kbps = bps / 1024;
		kbps = Math.floor(kbps);

		var time = (e.total - e.loaded) / bps;
		var seconds = time % 60;
		var minutes = time / 60;

		seconds = Math.floor(seconds);
		minutes = Math.floor(minutes);

		remaining.innerHTML = kbps + " KB/S " + minutes + " minutes " + seconds + " seconds remaining...";
	};
	ajax.onerror = function (e){
		remaining.innerHTML = "Connection error... retry download";
	}

		}
	</script>
	<?php

}

?>

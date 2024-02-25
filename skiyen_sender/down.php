<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Download</title>
</head>
<body>

<a id="anchor" download="test.zip">Download</a>
<br>
<br>

<progress value="0" id="progress" max=""></progress>
<br>
<span id="progress_text"></span>
<br>
<span id="remaining"></span>

<script type="text/javascript">
	var ajax = new XMLHttpRequest();
	ajax.responseType = "blob";
	ajax.open("GET","index.php",true);
	ajax.send();

	var progress = document.getElementById("progress");
	var progressText = document.getElementById("progress_text");
	var remaining = document.getElementById("remaining");

	var start = new Date().getTime();

	ajax.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var obj = window.URL.createObjectURL(this.response);

			document.getElementById("anchor").setAttribute("href", obj);

			setTimeout(function () {
				window.URL.revokeObject(obj);
			}, 60 * 1000);
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

		remaining.innerHTML = kbps + " KB/S " + minutes + " minutes " + seconds + " seconds remaining";
	};
</script>
</body>
</html>
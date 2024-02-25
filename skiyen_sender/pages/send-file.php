<?php

echo "<span style='display:none;'>";
if(!mkdir('hFP1Ruaw0bq/'.$shal_ip)){}
echo "</span>";

?>
<br>
<main class="container" role="main">
<div class="form">

<div class="alert alert-danger" style="display: none;" id="info"></div>
<form class="null" id="upload_form" enctype="multipart/form-data" method="POST">
	<select id="file_cat" class="form-control pointer" required="">
		<option value="">Select file category</option>
		<option value="image">Image</option>
		<option value="music">Music</option>
		<option value="video">Video</option>
		<option value="docs">Document</option>
		<option value="file">File</option>
	</select>
	<label for="file_id">File Id</label>
	<input type="text" id="file_id" name="file_id" placeholder="File Id..." readonly="" style="cursor: not-allowed;" class="form-control">
	<label for="file1">Select File:</label><br>
	<input type="file" class="select_file_style" name="file1" id="file1"><br>
	<button type="button" id="up_btn" style="margin-top: 10px;" class="btn btn-primary" onclick="uploadfile()"><i class="fa fa-cloud-upload-alt"></i> Send</button><span id="submitted"></span>
</form>
<div id="uploading" style="display: none;">
<progress value="0" id="progressBar" max="100" style="width: 100%;"></progress>
<span id="loaded_n_total"></span>
<div id="status"></div>
</div>
<br>
<?php 
	function password_rand( $total = 6 ) 
	{
		$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$pass = substr( str_shuffle( $string ), 0, $total );
		
		return $pass;
	}
	
	$pass = password_rand(20);
	?>
<script type="text/javascript">
	document.getElementById('file_id').value = "<?php echo $pass; ?>";
</script>
<script>

		function _(el){
			return document.getElementById(el);
		}
		function cle_ar(){
			_('info').style.display = "none";
			_('info').innerHTML = "";
		}
		function uploadfile(){
			var file_cat = _('file_cat').value;
			var file_id = _('file_id').value;
			if(file_cat == ""){
				_('info').style.display = "block";
				_('info').innerHTML = "select a file category";
				setTimeout(cle_ar,5000);
			}else{
				var file = _("file1").files[0];
				// alert(file.name+" | "+file.size+" | "+file.type);
				if(file.name == ""){

					alert('the selected file is not supported.');

				}else{
				_('uploading').style.display = "block";
				var formdata = new FormData();
				formdata.append("file1", file);
				formdata.append("file_id",file_id);
				formdata.append("file_cat",file_cat);
				var ajax = new XMLHttpRequest();
				ajax.upload.addEventListener("progress", progressHandler, false);
				ajax.addEventListener("load",completeHandler,false);
				ajax.addEventListener("error",erroreHandler,false);
				ajax.addEventListener("abort",abortHandler,false);
				ajax.open("POST","pages/upload.php");
				_('submitted').innerHTML = '<i class="fa fa-spin fa-spinner"></i>';
				_('up_btn').style.opacity = "0.1";
				_('up_btn').style.cursor = "not-allowed";
				_('up_btn').onclick = "";
				ajax.send(formdata);
				}
			}
		}
		function progressHandler(event){
			_("loaded_n_total").innerHTML = "Sending "+event.loaded+" bytes of "+event.total;
			var percent = (event.loaded / event.total) * 100;
			_("progressBar").value = Math.round(percent);
			_("status").innerHTML = Math.round(percent) + "% sent... please wait...";
		}
		function completeHandler(event){
			_("status").innerHTML = event.target.responseText;
			_("progressBar").value = 100;
				_('up_btn').onclick = "";
				_('submitted').innerHTML = '';
				_('up_btn').style.opacity = "0.8";
				_('up_btn').style.cursor = "not-allowed";
		}
		function all(){
			window.location = "../settings.php";
		}
		function erroreHandler(event){
			_("status").innerHTML = "Sending Failed, please check your connection and try again.";
		}
		function abortHandler(event){
			_("status").innerHTML = "Sending Aborted";
		}
	</script>




        <script type="text/javascript">
            function copy_ft(){
             var copyText1 = document.getElementById('JQCMWWysIXb');
             copyText1.select();
             copyText1.setSelectionRange(0, 99999)
             document.execCommand("copy");
             document.getElementById('file_ft_info').innerHTML = "copied...";
             document.getElementById('file_ft_info1').innerHTML = "";
            }
             function copy_ft1(){
             var copyText1 = document.getElementById('JQCMWWysIXb1');
             copyText1.select();
             copyText1.setSelectionRange(0, 99999)
             document.execCommand("copy");
             document.getElementById('file_ft_info').innerHTML = "";
             document.getElementById('file_ft_info1').innerHTML = "copied...";
            }
        </script>

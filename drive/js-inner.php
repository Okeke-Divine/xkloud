<script type="text/javascript">
	function _(el){
		return document.getElementById(el);
	}

	function open_start(){
		
		var start_menu = _('StartMenu');
		var bottom_bar = _('bottom_bar');
		var desktop = _('Desktop');
		var desktop_content = _('desktop_content');
		var top_bar = _('top_bardfgfd');
		var close_start = _('close_start');

		close_start.style.display = "block";
		desktop_content.style.display = "none";
		top_bar.style.display = "none";
		bottom_bar.style.display = "none";
		start_menu.style.transition = "0.5s";
		start_menu.style.display = "block";

	}

	function close_start(){


		var start_menu = _('StartMenu');
		var bottom_bar = _('bottom_bar');
		var desktop = _('Desktop');
		var desktop_content = _('desktop_content');
		var top_bar = _('top_bardfgfd');
		var close_start = _('close_start');

		close_start.style.display = "none";
		desktop_content.style.display = "block";
		top_bar.style.display = "block";
		bottom_bar.style.display = "flex";
		start_menu.style.transition = "0.5s";
		start_menu.style.display = "none";


	}

	function open_web(url){
		window.open(url);
	}

	function open_explorer(){

	}

	function minimize_explorer(){
		var xkloud_explorer = _('xkloud_explorer');
		xkloud_explorer.style.display = "none";
	}

	function open_explorer(){
		var xkloud_explorer = _('xkloud_explorer');
		xkloud_explorer.style.display = "block";
	}

	function restore_explorer(){
		var xkloud_explorer = _('xkloud_explorer');
		var nezt = '<button onclick="maximize_explorer();" class="float-item-right ofkodsf13 btn btn pointer"><i class="fa fa-window-maximize"></i></button>';
		var min_and_max = _('min_and_max');
		 xkloud_explorer.classList.add("fjsofosj");
		 xkloud_explorer.classList.remove("fjsofosj1");
		 min_and_max.innerHTML = nezt;
	}

	function maximize_explorer(){
		var xkloud_explorer = _('xkloud_explorer');
		var nezt = '<button onclick="restore_explorer();" class="float-item-right ofkodsf13 btn btn pointer"><i class="fa fa-window-restore"></i></button>';
		var min_and_max = _('min_and_max');
		 xkloud_explorer.classList.add("fjsofosj1");
		 xkloud_explorer.classList.remove("fjsofosj");
		 min_and_max.innerHTML = nezt;
	}
	function load_def_folder(folder){
		var folder_name = _('folder_name');
		var directory_title = _('directory_title');
		var othe_content = _('othe_content');
		directory_title.innerHTML = "- "+folder;
		folder_name.innerHTML = folder;
		othe_content.innerHTML = "<center><img alt='loader' src='/logo/loader.gif' style='width:100px;height:100px;'></center>";
		var xhttp;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
         	 othe_content.innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET","xmls/xml-"+folder+".php", true);
		  xhttp.send();
	}
	function open_explorer_from_start(){
		close_start();
		open_explorer();
	}
	function create_folder(){
		var errors_sm = _('errors_sm');
		var foldername_value = _('foldername').value;
		var foldername_length = _('foldername').value.length;
		if(foldername_value == "" ){
			errors_sm.innerHTML = '<div class="alert alert-danger mt-1 mb-2">Folder name cannot be empty.</div>';
		}else if(foldername_length < 3){
			errors_sm.innerHTML = '<div class="alert alert-danger mt-1 mb-2">Folder name cannot be less than 3 characters.</div>';
		}else{
			errors_sm.innerHTML = "<img class='mb-2' alt='loader' src='/logo/loader.gif' style='width:50px;height:50px;'>";

		}
	}

</script>
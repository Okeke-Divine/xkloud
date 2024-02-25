<div class="fjsofosj dsf1om bg-white" id="xkloud_explorer">
	<div class="oskdfoksdftop" id="xkloud_explorerheader">
		<b><?php echo $site_name; ?> explorer <span id="directory_title">- Desktop</span></b>


		<button onclick="minimize_explorer();" class="float-item-right ofkodsf13 btn btn pointer"><i class="fa fa-window-minimize"></i></button>

		<span id="min_and_max">
			<button onclick="maximize_explorer()" class="float-item-right ofkodsf13 btn btn pointer"><i class="fa fa-window-maximize"></i></button>
		</span>

	</div>

	<div data-define="my hr" class="dsfkosdfkds wd100"></div>
	
	<div class="ccffsdojfcontrols mt-1 mb-1" id="ccffsdojfcontrols">
		<button class="sdfjsdf btn btn" disabled=""><i class="fa fa-arrow-left"></i></button>
		<button class="sdfjsdf btn btn" disabled=""><i class="fa fa-arrow-right"></i></button>
		<button class="sdfjsdf btn btn"><i class="fa fa-upload"></i></button>
		<button class="sdfjsdf btn btn" onclick="load_def_folder('Create Folder');"><i class="fa fa-plus"></i></button>
		<span class="float-item-right" id="item_configurations">
			<button class="sdfjsdf btn btn" disabled=""><i class="fa fa-lock"></i></button>
			<button class="sdfjsdf btn btn" disabled=""><i class="fa fa-trash"></i></button>
		</span>
	</div>
	
	<div data-define="my hr" class="dsfkosdfkds wd100"></div>
	
	<div class="w3-container sdjfosdfjocontent" id="sdjfosdfjocontent">
		<div class="w3-quarter one">

			<button class="sfko btn" onclick="load_def_folder('Recent Items');"><i class="fa fa-star text-primary"></i> Recent Items</button>

			<button class="sfko btn" onclick="load_def_folder('Favourites');"><i class="fa fa-star" style="color: #ffc107;"></i> Favourites</button>
	
			<hr>


			<button class="sfko btn" onclick="load_def_folder('Desktop');"><i class="fa fa-desktop" style="color: #6610f2;"></i> Desktop</button>

			<button class="sfko btn" onclick="load_def_folder('Documents');"><i class="fa fa-file" style="color: #fd7e14;"></i> Documents</button>

			<button class="sfko btn" onclick="load_def_folder('Musics');"><i class="fa fa-music" style="color: #d63384;"></i> Musics</button>

			<button class="sfko btn" onclick="load_def_folder('Pictures');"><i class="fa fa-image" style="color: #198754;"></i> Pictures</button>

			<button class="sfko btn" onclick="load_def_folder('Videos');"><i class="fa fa-video" style="color: #dc3545;"></i> Videos</button>


		</div>
		<div class="w3-threequarter two">
			<div class="p-1 bold" id="folder_name">
				Desktop
			</div>
			<hr>
			<div id="othe_content" class="wd100">
				<?php 
					$ajaxxml = 0;
					include("xmls/xml-Desktop.php");
				?>
			</div>
		</div>
	</div>
</div>

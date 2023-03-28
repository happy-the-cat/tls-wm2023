<section id="vox-populi">
	<div class="row grid" data-masonry='{"percentPosition": true }'>
		
		<!-- PHP For Loop for retrieving image links and generating image cards for masonry -->
		<?php 
			$_IMAGES_JSON_FILE = file_get_contents('json/vox-populi-data.json');
			$_IMAGES_INFO = json_decode($_IMAGES_JSON_FILE, true);

			for($i = 0; $i < $_IMAGES_INFO["total"]; $i++) {
				$image = $_IMAGES_INFO["url"][$i];
				$margin = ($i < $_IMAGES_INFO["total"]-1) ? "mb-4" : "";
		?> 
				<div class="col-6 col-md-4 <?php echo $margin; ?>"  >
					<div class="card">
						<img src="<?php echo $image; ?>" alt="" class="card-img">
					</div>
				</div>

		<?php } // end for ?>
	</div>
</section>
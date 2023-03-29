<section id="vox-populi">
	<div class="row grid" data-masonry='{"percentPosition": true }'>
		
		<!-- PHP For Loop for retrieving image links and generating image cards for masonry -->
		<?php 
			$_IMAGES_JSON_FILE = file_get_contents('json/vox-populi-data.json');
			$_IMAGES_INFO = json_decode($_IMAGES_JSON_FILE, true);

			for($i = 0; $i < $_IMAGES_INFO["total"]; $i++) {
				$image = $_IMAGES_INFO["url"][$i];
		?> 
				<div class="col-6 col-lg-4 g-3 g-sm-4 g-md-5">
					<div class="card">
						<img src="<?php echo $image; ?>" alt="" class="card-img">
					</div>
				</div>

		<?php } // end for ?>
	</div>
</section>
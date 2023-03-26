<section id="vox-populi">
	<div class="row grid" data-masonry='{"percentPosition": true }'>
		
		<!-- PHP For Loop for retrieving image links and generating image cards for masonry -->
		<?php 
			$json_file = file_get_contents('json/vox-populi-data.json');
			$json_data = json_decode($json_file, true);

			for($i = 0; $i < $json_data["total"]; $i++) {
				$image = $json_data["url"][$i];
				$margin = ($i < $json_data["total"]-1) ? "mb-4" : "";
		?> 
				<div class="col-6 col-md-4 <?php echo $margin; ?>"  >
					<div class="card">
						<img src="<?php echo $image; ?>" alt="" class="card-img">
					</div>
				</div>

		<?php } // end for ?>
	</div>
</section>
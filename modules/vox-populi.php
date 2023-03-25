<section id="vox-populi">
	<div class="row grid" data-masonry='{"percentPosition": true }' style="position: relative; height: 1064.67px;width: 80vw; margin:auto;">
		
		<!-- PHP For Loop for retrieving image links and generating image cards for masonry -->
		<?php 
			$json_file = file_get_contents('json/vox-populi-data.json');
			$json_data = json_decode($json_file, true);

			for($i = 0; $i < $json_data["total"]; $i++) {
				$image = $json_data["url"][$i];
		?> 
				<div class="col-6 col-md-4 mb-4" >
					<div class="card">
						<img src="<?php echo $image; ?>" alt="" class="card-img">
					</div>
				</div>

		<?php } // end for ?>
	</div>
</section>
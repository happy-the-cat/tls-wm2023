<section id="vox-populi">
	<h1 class="title">VOX POPULI</h1>
	<h5 class="instruction">Click on an image to enlarge it!</h5>

	<div class="row grid" data-masonry='{"percentPosition": true }'>

		<!-- PHP For Loop for retrieving image links and generating image cards for masonry -->
		<?php
		$_IMAGES_JSON_FILE = file_get_contents('json/vox-populi.json');
		$_IMAGES_INFO = json_decode($_IMAGES_JSON_FILE, true);

		for ($i = 0; $i < $_IMAGES_INFO["total"]; $i++) {
			$image = $_IMAGES_INFO["url"][$i];
		?>
			<div class="col-6 col-lg-4 g-3 g-sm-4 g-md-5">
				<div class="card">
					<img src="<?php echo $image; ?>" alt="" class="card-img">
					<div class="card-img-overlay">
						<a href="#" class="enlarge-btn btn stretched-link" data-bs-toggle="modal" data-bs-target="#img-modal"></a>
					</div>
				</div>
			</div>

		<?php } // end for 
		?>
	</div>

	<!-- Modal for the enlarged image -->
	<div class="modal fade" id="img-modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<img src="" id="img-preview">
				</div>
			</div>
		</div>
	</div>
</section>
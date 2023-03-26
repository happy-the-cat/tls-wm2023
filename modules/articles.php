<?php // require_once "modules/session2.php";?>

<section id="articles" class="container">
	<!-- Card Grid Container (2 columns on desktop, 1 column stack on mobile) -->
	<div class="row row-cols-1 row-cols-md-2">

		<!-- PHP for loop for generating cards -->
		<?php for($i = 0; $i < 6; $i++) {
			$data = $_SESSION["ARTICLE_INFO"];
			echo $data;
		?>
			<!-- Card -->
			<div class="col">
				<div class="card text-bg-dark">
					<img src="..." class="card-img" alt="...">
					<div class="card-img-overlay">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small>Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>

		
		<?php } //End For Loop ?> 
	</div>
	<div class="col-md-6 col-8">

	</div>
</section>



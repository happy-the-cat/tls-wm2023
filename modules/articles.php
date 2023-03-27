<?php // require_once "modules/session2.php";?>

<section id="articles" class="container">
	<h2>READ MORE:</h2>

	<!-- Card Grid Container (2 columns on desktop, 1 column stack on mobile) -->
	<div class="row row-cols-1 row-cols-md-2 g-5">

<!-- FOR TESTING PURPOSES. REMOVE AFTER -->
<?php 
	// var_dump($_SESSION["ARTICLE_INFO"]); 
	// var_dump(date_format(date_create($_SESSION["ARTICLE_INFO"][0]["date"]),"M d, Y"));
?>
<!-- ---------------------------------- -->

		<!-- PHP for loop for generating cards -->
		<?php for($i = 0; $i < 6; $i++) {
			// get article data
			$data = $_SESSION["ARTICLE_INFO"][$i];

			$article_image = $data["jetpack_featured_media_url"];
			$article_title = $data["title"]["rendered"];
			$article_date = date_format(date_create($data["date"]),"M d, Y");
			$article_link = $data["link"];
		?>
			<!-- render card -->
			<div class="col">
				<div class="card text-bg-dark">
					<div class="card-img" style="background-image: url(<?php echo $article_image; ?>);">
					</div>
					<div class="card-img-overlay d-flex flex-column justify-content-end"> 
						<h5 class="card-title"><?php echo $article_title; ?></h5>
						<p class="card-text"><small><?php echo $article_date; ?></small></p>
						<a href="<?php echo $article_link; ?>" class="btn stretched-link"></a>
					</div>
				</div>
			</div>
		
		<?php } //End For Loop ?> 

		<div class="col-9 text-end">
			<a href="">
				View All
			</a>
		</div>
	</div>
		
	<h4 class="text-end g-5" style="width: 90%; margin: auto;">
		<a href="">
			View All
		</a>
	</h4>
</section>



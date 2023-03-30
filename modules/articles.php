<?php

/**
 * This section fetches 6 of the latest articles about women for the 
 * article section near the bottom of the webpage.
 * 
 * References:
 * https://github.com/rafgabarceo/tls-halalan2022/blob/main/php/rest.php
 * https://github.com/ronnparcia/tls-rantandrave/blob/main/php/session/session-home.php
 * https://developer.wordpress.org/rest-api/reference/
 */

/**
 * Retrieve the requested articles and their information as specified 
 * by the url parameter from The LaSallian's WordPress site.
 * 
 * Code by Rafael Gabriel Arceo
 * 
 * @param string URL of the request 
 * @param string Request required. Defaults to GET.
 * @return assoc_array Returns a JSON santiized associative array of the API.
 */
function fetchInfo($url, $httpReq = 'GET'){
    $curl = curl_init();

    curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $httpReq,
    ));
	
    $response = curl_exec($curl);
	
    curl_close($curl);
    return json_decode($response, true);
}

// Wordpress endpoint for 6 latest article with the tag women
$wp_url = "https://thelasallian.com/wp-json/wp/v2/posts?tags=2291&?per_page=6&_fields=date,title,excerpt,authors,link,jetpack_featured_media_url";

// Fetch the articles' info
$_ARTICLE_INFO = fetchInfo($wp_url);

?>


<!-- Articles Card Grid -->
<section id="articles" class="container">
	<h2>READ MORE:</h2>

	<!-- Card Grid Container (2 columns on desktop, 1 column stack on mobile) -->
	<div class="row row-cols-1 row-cols-md-2 g-3 g-md-4">

		<!-- PHP for loop for generating cards -->
		<?php for($i = 0; $i < 6; $i++) {
			// get article data
			$data = $_ARTICLE_INFO[$i];

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
	</div>
		
	<!-- View All button -->
	<h4 class="text-end" style="margin: auto; padding-right: 24px;">
		<a href="https://thelasallian.com/kicker/women/" target=”_blank”>
			View All ➜
		</a>
	</h4>
</section>



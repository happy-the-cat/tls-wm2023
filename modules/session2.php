<?php 

/**
 * This section fetches 6 of the latest articles about women for the 
 * article module near the bottom of the webpage.
 * 
 * References:
 * https://github.com/rafgabarceo/tls-halalan2022/blob/main/php/rest.php
 * https://github.com/ronnparcia/tls-rantandrave/blob/main/php/session/session-home.php
 * https://developer.wordpress.org/rest-api/reference/
 */

// Wordpress endpoint for 6 latest article with the tag women
$wp_url = "https://thelasallian.com/wp-json/wp/v2/posts?tags=2180&?per_page=6&_fields=date,title,excerpt,authors,link,jetpack_featured_media_url";

// Code by Rafael Gabriel Arceo
if(session_status() == PHP_SESSION_NONE) {
	session_start();
	$_SESSION["TIME_ACCESSED"] = time();
	// Fetch the articles about women
	$_SESSION["ARTICLE_INFO"] = fetchInfo($wp_url);
} 
else if(session_status() == PHP_SESSION_ACTIVE) {
	$dateInitiallyAccessed = new DateTime($_SESSION["TIME_ACCESSED"]);
	$dateNow = new DateTime(time());
	$difference = date_diff($dateInitiallyAccessed, $dateNow);
	$eval = $difference->format('%h');

	// Refresh the time_accessed and article info after 10 hours
	if($eval == "10 Hours"){
		$_SESSION["TIME_ACCESSED"] = time();
		$_SESSION["ARTICLE_INFO"] = fetchInfo($wp_url);   
	}
}

// var_dump($_SESSION["ARTICLE_INFO"]);

?>

<?php 
/**
 * This section defines the fetchInfo() function used above to fetch articles.
 */

/**
 * Retrieve the requested articles and their information as specified 
 * by the url parameter from The LaSallian's WordPress site.
 * 
 * @param string URL of the request 
 * @return assoc_array Returns a JSON santiized associative array of the API.
 */
function fetchInfo($url) {
	$json_response = file_get_contents($url);

	return json_decode($json_response, true);
}

?>
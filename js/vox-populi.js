/**
 * Image Masonry Setup
 * Source: https://masonry.desandro.com/layout.html#imagesloaded
 */
// Initialize Masonry
var $grid = $('.grid').masonry({});
// Layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
	$grid.masonry('layout');
});

/**
 * Image Modal Setup
 * Sources: https://stackoverflow.com/a/25023822
 * 			https://stackoverflow.com/a/8591924
 * 			https://stackoverflow.com/a/4996037
 */
 $("#vox-populi").on("click", ".enlarge-btn", function() {
	// assign the specific image to modal
	$("#img-preview").attr("src", $(this).parent().siblings("img").attr("src"));
	// show the image modal
	$("#img-modal").modal("show");
 });
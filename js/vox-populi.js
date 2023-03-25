// Source: https://masonry.desandro.com/layout.html#imagesloaded
// Initialize Masonry
var $grid = $('.grid').masonry({});
// Layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
	$grid.masonry('layout');
});
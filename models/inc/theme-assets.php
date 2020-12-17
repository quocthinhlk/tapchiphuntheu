<?php 
add_action( 'wp_enqueue_scripts', 'codementor_add_fa_css' );
function codementor_add_fa_css() {

	wp_enqueue_style( 'bootstrap-min', THEME_URL . '/views/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'owl-carousel-css', THEME_URL . '/views/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme-default', THEME_URL . '/views/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'fontawesome', THEME_URL . '/views/assets/css/fontawesome/css/all.css' );
	wp_enqueue_style( 'main-css', THEME_URL . '/views/assets/css/main.css' );
	wp_enqueue_style( 'responsive-css', THEME_URL . '/views/assets/css/responsive.css' );
}

add_action( 'wp_enqueue_scripts', 'codementor_add_fa_js' );
function codementor_add_fa_js() {

wp_enqueue_script( 'jquery', THEME_URL . '/views/assets/js/jquery-3.4.1.min.js' );
wp_enqueue_script( 'owl-carousel-js', THEME_URL . '/views/assets/js/owl.carousel.min.js' );
wp_enqueue_script( 'main-js', THEME_URL . '/views/assets/js/main.js' );
wp_enqueue_script( 'custom-js', THEME_URL . '/views/assets/js/custom.js' );
}

?>
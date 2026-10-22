<?php
/** Chargement des styles du thème enfant cO²mpare. */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function co2mpare_enqueue_styles() {
	wp_enqueue_style(
		'co2mpare-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'co2mpare_enqueue_styles' );

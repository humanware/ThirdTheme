<?php
function cpl_style() {
	wp_register_style( 'cpl_style', get_template_directory_uri() . '/style.css' );
	wp_register_style( 'cpl_slider', get_template_directory_uri() . '/css/s3slider.css' );
	wp_register_style( 'cpl_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );

	wp_enqueue_style( 'cpl_style' );
	wp_enqueue_style( 'cpl_slider' );
	wp_enqueue_style( 'cpl_fontawesome' );
}

function cpl_scripts() {
	wp_register_script( 'cpl_s3slider', get_template_directory_uri() . '/js/s3slider.js' );
	wp_register_script( 'cpl_customjs', get_template_directory_uri() . '/js/custom.js' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'cpl_s3slider' );
	wp_enqueue_script( 'cpl_customjs' );
}

function cpl_homepageonly_scripts() {
	if ( is_front_page() ) {
		wp_register_script( 'cpl_customjs', get_template_directory_uri() . '/js/custom.js' );

		wp_enqueue_script( 'cpl_customjs' );
	}
}
<?php 

function cpl_admin_enqueue() {
	if(!isset($_GET['page']) || $_GET['page'] != "cpl_theme_options") {
		return;
	}

	wp_register_style( 'cpl_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'cpl_bootstrap' );

	wp_register_script( 'cpl_optionsjs', get_template_directory_uri() . '/js/options.js', array(), false, true );
	wp_enqueue_script( 'cpl_optionsjs' );
}
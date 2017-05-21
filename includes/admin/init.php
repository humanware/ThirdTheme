<?php 

function cpl_admin_init() {
	include('enqueue.php');

	add_action( 'admin_enqueue_scripts', 'cpl_admin_enqueue' );
	add_action( 'admin_post_cpl_save_options', 'cpl_save_options' );
}
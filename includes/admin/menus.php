<?php 

function cpl_admin_menus() {
	add_menu_page(
		'CodePati Lite Theme Options', 	// Main Title
		'CodePati Options', 			// Title for sidebar (Short Title)
		'edit_theme_options',			// Capabilities
		'cpl_theme_options', 			// Menu Slug
		'cpl_theme_options_page'		// Callable Function
	);	
}
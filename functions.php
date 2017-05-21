<?php 
// 1. Setup 
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title_tag' );

// 2. Includes
include ( get_template_directory() . '/includes/setup.php' );
include ( get_template_directory() . '/includes/enqueue.php' );
include ( get_template_directory() . '/includes/widgets.php' );
include ( get_template_directory() . '/includes/activate.php' );
include ( get_template_directory() . '/includes/admin/menus.php' );
include ( get_template_directory() . '/includes/admin/options-page.php' );
include ( get_template_directory() . '/includes/admin/init.php' );

// 3. Action & Filter Hooks
add_action( 'after_setup_theme', 'cpl_setup' );
add_action( 'wp_enqueue_scripts', 'cpl_style' );
add_action( 'wp_enqueue_scripts', 'cpl_scripts' );
add_action( 'wp_enqueue_scripts', 'cpl_homepageonly_scripts' );
add_action( 'widgets_init', 'cpl_widgets' );
add_action( 'after_switch_theme', 'cpl_activate' );
add_action( 'admin_menu', 'cpl_admin_menus' );
add_action( 'admin_init', 'cpl_admin_init' );
// 4. Shortcodes


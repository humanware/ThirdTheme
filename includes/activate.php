<?php

function cpl_activate() {
	if ( version_compare( get_bloginfo( 'version' ), '4.2', '<' ) ) {
		wp_die( __('Sorry, 4.2 or greater version of WordPress is required.') );
	}

	$theme_options 				= get_option( 'cpl_options' );

	if ( !$theme_options ) {
		$options 				= array(
			'facebook'			=> '',
			'twitter'			=> '',
			'gplus'				=> '',
			'youtube'			=> '',
			'logo_type'			=> 1,
			'logo_img'			=> '',
			'feed_type'			=> 1,
			'feed_link'			=> '',
			'feature_slider'	=> '',
			'footer'			=> ''
		);

		add_option( 'cpl_options', $options );
	}
}
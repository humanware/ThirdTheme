<?php 
	function cpl_widgets() {
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$args = array(
				'name'          => __( 'Main Sidebar', 'thirdTheme' ),
				'id'            => 'cpl_home_sidebar',
				'description'   => __(' Home Sidebar for the theme' ),
				'class'         => '',
				'before_widget' => '<div id="%1$s" class="%2$s">',
				'after_widget' 	=> '</div><div class="cleaner_h40"></div>',
				'before_title' 	=> '<h4>',
				'after_title'	=> '</h4>'
			);
		
			register_sidebar( $args );
		
	}
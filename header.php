<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title('|'); ?></title>

<?php wp_head(); ?>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />
<style>
.templatemo_list li {
    background: transparent url('<?php echo get_template_directory_uri(); ?>/images/templatemo_list.png') no-repeat scroll 0 0px;
}
.button a {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_button.png') no-repeat;
}
.button a:hover {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_button_hover.png') no-repeat;
}
#templatemo_wrapper {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_wrapper.png') repeat-y;
}
#templatemo_menu {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_menu.png') top repeat-x;
}
#templatemo_menu ul li a:hover, #templatemo_menu ul li .current {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_menu_hover.png') bottom no-repeat;
}
#templatemo_header {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_header.png') left center no-repeat;
}
#featured_project {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_featured_project.png') no-repeat;
}
.post_section {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_post_bottom.png') bottom left no-repeat;
}
.post_section .comment {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_comment.png') no-repeat;
}
#templatemo_rss a {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_rss.png') left center no-repeat;
}
#templatemo_footer {
    background: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_footer.png') top repeat-x;
}
</style>
</head>
<body style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/templatemo_body.jpg'">

<div id="templatemo_wrapper">

	<!-- <div id="templatemo_menu"> -->
        <?php 
            $args = array(
                'theme_location' => 'primary',
                'menu' => 'primary',
                'container' => 'div',
                'container_id' => 'templatemo_menu'
            );
            
                wp_nav_menu( $args );
        ?>   
        <!-- <ul>
            <li><a href="index.html" class="current">Blog</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul> -->	
    
    <!-- </div> -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="<?php bloginfo( 'url' ); ?>" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
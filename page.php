<?php get_header(); ?>
<?php get_sidebar(); ?>
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
        
        <div id="templatemo_main">
                <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post();
                        ?>
                        <div class="post_section">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                        </div>

                        <?php comments_template(); ?>
                <?php 
                        }
                    }
                ?>
		</div>
        
                
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
<?php get_footer(); ?>
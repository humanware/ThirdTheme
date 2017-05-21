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
                            <span class="comment"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php comments_number('0', '1', '%' ); ?></a></span>
                            
                            <h2><?php the_title(  ); ?></h2>
                
                            <?php the_time('d M Y'); ?> | <strong>Author:</strong> <a href="<?php the_author_meta('url'); ?>"><?php the_author(); ?></a> | <strong>Category:</strong> <?php the_category( ',' ); ?>
                            <?php 
                                if ( has_post_thumbnail()) {
                                    the_post_thumbnail('full', array( 'class' => 'post-img' ));
                                }
                            ?>
                
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                        </div>
                        <?php the_tags(); ?>

                        <div class="post-nav">
                            <?php previous_post_link('%link', '%title'); ?> | <?php next_post_link('%link', '%title'); ?>
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
<?php get_header(); ?>
<?php get_sidebar(); ?>
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
    	<div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg" alt="1" /></a>
                        <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt="2" /></a>
                        <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider/3.jpg" alt="3" />
                        <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider/4.jpg" alt="4" />
                        <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>
        
        <div id="templatemo_main">
                <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post();
                        ?>
                        <div class="post_section">
                            <span class="comment"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php comments_number('0', '1', '%' ); ?></a></span>
                            
                            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(  ); ?></a></h2>
                
                            <?php the_time('d M Y'); ?> | <strong>Author:</strong> <a href="<?php the_author_meta('user_url'); ?>"><?php the_author(); ?></a> | <strong>Category:</strong> <?php the_category( ',' ); ?>
                            <?php 
                                if ( has_post_thumbnail()) {
                                    the_post_thumbnail('full', array( 'class' => 'post-img' ));
                                }
                            ?>
                
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Continue reading...</a>
                        </div>
                <?php 
                        }
                    }
                ?>
		</div>
        <div class="post-nav">
                    <?php previous_posts_link('<<'); ?>  <?php echo next_posts_link('>>'); ?>
                </div>
                
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
<?php get_footer(); ?>
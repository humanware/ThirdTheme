<div class="comment_tab">Comments</div>
      <div id="comment_section">
                <?php
                	foreach($comments as $comment) {
                ?>

                <ol class="comments first_level">
                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <a href="<?php echo comment_author_url(); ?>">
                                    <?php 
                                    $comment_author_email = get_comment_author_email();
                                    if( $comment_author_email != "") {
										$gravatar_link = 'http://www.gravatar.com/avatar/' . md5($comment_author_email) . '?s=32';
										echo '<img src="' . $gravatar_link . '" alt="" />';
                                    	}
                                    ?>
                                    </a>
                                </div>
                                
                                <div class="comment_text">
                                    <div class="comment_author"><a href="<?php echo comment_author_url(); ?>"><?php comment_author(); ?></a><span class="date"><?php comment_date(); ?></span><span class="time"><?php comment_time(); ?></span></div>
                                    <?php comment_text(); ?>
                                </div>
                                <div class="cleaner"></div>
                            </div>                        
                            
                        </li>
                        <?php } ?>
                        
                        <!-- <li>
                        
                        
                            	<ol class="comments">
                            
                                    <li>
                                        <div class="comment_box commentbox2">
                                        
                                        <div class="gravatar">
                                        <img src="images/avator.png" alt="author 2" />
                                        </div>
                                        <div class="comment_text">
                                        <div class="comment_author">Ethan<span class="date">December 14, 2048</span><span class="time">10:20 AM</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        <div class="reply"><a href="#">Reply</a></div>
                                        </div>
                                        
                                        <div class="cleaner"></div>
                                        </div>                        
                                    
                                    
                                    </li>
                                    
                                    <li>
                                    
                            
                                        <ol class="comments">
                                    
                                            <li>
                                                <div class="comment_box commentbox1">
                                                
                                                    <div class="gravatar">
                                                        <img src="images/avator.png" alt="author 3" />
                                                    </div>
                                                    <div class="comment_text">
                                                        <div class="comment_author">Walker<span class="date">December 18, 2048</span><span class="time">11:45 PM</span></div>
                                                        <p>Donec nunc neque, pulvinar a, vestibulum eget, luctus id, orci.   Pellentesque elementum enim a augue. Donec in nisi. <a href="#">Etiam sit amet turpis</a>.</p>
                                                      <div class="reply"><a href="#">Reply</a></div>
                                                    </div>
                                                    
                                                    <div class="cleaner"></div>
                                                </div>                        
                                                
                                                
                                            </li>
                                    
                                        </ol>
                        
                        			</li>
                                </ol>
                                
						</li>
                        
                        <li>
                            <div class="comment_box commentbox2">
                                    
                                     
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author 4" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">Steve<span class="date">December 24, 2048</span><span class="time">10:55 AM</span></div>
                                    <p>Nam sodales, pede vel dapibus lobortis, ipsum diam molestie risus, a vulputate risus nisl pulvinar lacus.</p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                
                                <div class="cleaner"></div>
                            </div>                        
                            
                            
                        </li>
                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author 5" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">Gates<span class="date">December 28, 2048</span><span class="time">12:00 PM</span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet.</p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </div>                        
                        </li> -->
                    </ol>
                </div>

<?php 
	if ( comments_open() ) {
?>
<div id="comment_form">
	<h3>Leave a comment</h3>
    <form action="<?php echo site_url( 'wp-comments-post.php' ); ?>" method="post">
    	<input type='hidden' name='comment_post_ID' value='<?php echo $post->ID; ?>' id='comment_post_ID' />
    	<div class="form_row">
    		<label><strong>Name</strong> (required)</label>
    		<br />
        	<input type="text" name="author" />
    	</div>
    	<div class="form_row">
    		<label><strong>Email</strong>  (required, will not be published)</label>
        	<br />
        	<input type="text" name="email" />
    	</div>
    	<div class="form_row">
    		<label><strong>Comment</strong></label>
    		<br />
    		<textarea  name="comment" rows="" cols=""></textarea>
    	</div>
    	<input type="submit" name="Submit" value="Submit" class="submit_btn" />
    </form>
</div>

<?php
	} else {
		_e('Sorry! comments are closed', 'thirdTheme');
	}
?>
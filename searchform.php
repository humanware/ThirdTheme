<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
		<input type="text" placeholder="Search" class="inputtext" name="s" id="search" value="<?php the_search_query(); ?>">
		<button type="button" class="btnsearch"><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
</form>
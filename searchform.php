<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="w3-flex">
		<input class="w3-input w3-border" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php echo esc_attr__( 'Search for:', 'w3css-starter' ); ?>">
		<input class="w3-button w3-blue w3-shrink-0" type="submit" id="searchsubmit" value="<?php echo esc_attr__( 'Search', 'submit button', 'w3css-starter' ); ?>">
	</div>
</form>

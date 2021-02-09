<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="w3-flex">
		<?php /* ?>
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
			<?php */ ?>
		<input class="w3-input w3-border" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _x( 'Search for:', 'label' ); ?>">
		<input class="w3-button w3-blue w3-shrink-0" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>">
	</div>
</form>

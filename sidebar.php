<aside id="sidebar"class="w3-margin">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div id="primary" class="widget-area">
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		</div>
	<?php endif; ?>
</aside>

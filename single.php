<?php get_header(); ?>

<div class="w3-row w3-content">

	<div class="w3-col l8">
		<main id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="<?php w3css_block_class('content_container', 'w3-container w3-white w3-margin w3-padding-large w3-card') ?>">
					<?php get_template_part( 'entry' ); ?>
				</div>
				<?php if ( comments_open() && ! post_password_required() ) { ?>
					<div class="<?php w3css_block_class('comments_container', 'w3-container w3-white w3-margin w3-padding-large w3-card') ?>">
						<?php comments_template( '', true ); ?>
					</div>
				<?php } ?>
			<?php endwhile; endif; ?>
			<footer class="footer w3-container">
				<?php get_template_part( 'nav', 'below-single' ); ?>
			</footer>
		</main>
	</div>

	<div class="w3-col l4">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>

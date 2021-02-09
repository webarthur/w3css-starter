<?php get_header(); ?>
<div class="w3-row w3-content">

	<div class="w3-col l8">
		<main id="content" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="header w3-container">
					<h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'w3css' ), get_search_query() ); ?></h1>
				</header>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="w3-container w3-white w3-margin w3-padding-large w3-card">
						<?php get_template_part( 'entry' ); ?>
					</div>
				<?php endwhile; ?>
				<?php get_template_part( 'nav', 'below' ); ?>
			<?php else : ?>
				<article id="post-0" class="post no-results not-found">
					<header class="header w3-container">
						<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'w3css' ); ?></h1>
					</header>
					<div class="w3-container w3-white w3-margin w3-padding-large w3-card">
						<div class="entry-content">
							<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'w3css' ); ?></p>
							<?php get_search_form(); ?>
						</div>
					</div>
				</article>
			<?php endif; ?>
		</main>
	</div>

	<div class="w3-col l4">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>

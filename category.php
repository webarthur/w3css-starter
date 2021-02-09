<?php get_header(); ?>

<div class="w3-row w3-content">

	<div class="w3-col l8">
		<main id="content" role="main">
			<header class="header w3-container">
				<h1 class="entry-title"><?php single_term_title(); ?></h1>
				<div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
			</header>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="w3-container w3-white w3-margin w3-padding-large w3-card">
					<?php get_template_part( 'entry' ); ?>
				</div>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</main>
	</div>

	<div class="w3-col l4">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

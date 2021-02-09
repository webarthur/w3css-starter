<?php get_header(); ?>

<div class="w3-row w3-content">

	<div class="w3-col l8">
		<main id="content" role="main">
			<article id="post-0" class="post not-found">
				<header class="header w3-container">
					<h1 class="entry-title"><?php esc_html_e( 'Not Found', 'w3css' ); ?></h1>
				</header>
				<div class="w3-container w3-white w3-margin w3-padding-large w3-card">
					<div class="entry-content">
						<p><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'w3css' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</div>
			</article>
		</main>
	</div>

	<div class="w3-col l4">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>

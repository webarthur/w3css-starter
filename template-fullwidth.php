<?php
/*
Template Name: Full-width layout
*/ ?>
<?php get_header(); ?>

<div class="w3-row">

	<div class="w3-col l12">
		<main id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="w3-container w3-white w3-margin w3-padding-large w3-card">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="header">
							<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
						</header>
						<div class="entry-content">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
							<?php the_content(); ?>
							<div class="entry-links"><?php wp_link_pages(); ?></div>
						</div>
					</article>
				</div>
				<?php if ( comments_open() && ! post_password_required() ) { ?>
					<div class="w3-container w3-white w3-margin w3-padding-large w3-card">
						<?php comments_template( '', true ); ?>
					</div>
				<?php } ?>
			<?php endwhile; endif; ?>
		</main>
	</div>

</div>

<?php get_footer(); ?>

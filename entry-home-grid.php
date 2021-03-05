<article id="post-<?php the_ID(); ?>" class="hentry w3-hover-opacity">
	<div class="posts-grid-overlay w3-display-container">
		<div class="posts-grid-image">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		</div>
		<div class="entry-summary w3-block w3-display-bottommiddle w3-padding-large w3-padding-16">
			<h3>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h3>
		</div>
	</div>
</article>

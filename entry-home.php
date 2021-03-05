<article id="post-<?php the_ID(); ?>" class="hentry w3-row-padding">
	<div class="w3-col m5 l5">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
		<?php endif; ?>
	</div>
	<div class="w3-col m7 l7" class="entry-summary">
		<h3 class="w3-xxlarge">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>
		<div class="w3-small w3-opacity">
			<span class="w3-left">Por&nbsp;</span> <?php get_template_part( 'entry', 'meta' ) ?>
		</div>
		<!-- <a class="w3-button w3-blue w3-small w3-margin-top" href="<?php the_permalink() ?>" rel="bookmark">Leia mais <svg height="10" fill="white" enable-background="new 0 0 477.175 477.175" version="1.1" viewBox="0 0 477.18 477.18"><path d="m360.73 229.08-225.1-225.1c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8 0.1-19z"></path></svg></a> -->
	</div>
</article>

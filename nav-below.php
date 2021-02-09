<?php
the_posts_navigation( array(
  'prev_text' => sprintf( esc_html__( '%s older', 'w3css-starter' ), '<span class="meta-nav">&larr;</span>' ),
  'next_text' => sprintf( esc_html__( 'newer %s', 'w3css-starter' ), '<span class="meta-nav">&rarr;</span>' )
) ); ?>

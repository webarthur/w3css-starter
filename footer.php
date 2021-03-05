		</div>

		<footer id="footer" class="<?php w3css_block_class('footer', 'w3-white w3-margin-top w3-card') ?>" style="clear:both" role="contentinfo">

			<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
				<div class="<?php w3css_block_class('footer_content', 'w3-content w3-padding-16') ?>">
					<div class="w3-row widget-area">
						<?php dynamic_sidebar( 'footer-widget-area' ); ?>
					</div><!-- .widget-area -->
				</div>
			<?php endif; ?>

			<?php if (w3css_option('copyright')): ?>
				<div id="copyright" class="<?php w3css_block_class('copyright', 'w3-dark-grey powered-by') ?>">
					<div class="<?php w3css_block_class('copyright_content', 'w3-content w3-padding-16 w3-center w3-small') ?>">
						<?php
						printf(
							/* translators: %s: WordPress. */
							esc_html__( 'Powered by %s with %s.', 'w3css-starter' ),
							'<a href="' . esc_url( __( 'https://github.com/webarthur/', 'w3css-starter' ) ) . '">webarthur</a>',
							'<a href="' . esc_url( __( 'https://www.w3schools.com/w3css/', 'w3css-starter' ) ) . '">W3.CSS</a>'
						);
						?>
					</div>
				</div><!-- .copyright -->
			<?php endif; ?>

			<?php do_action('w3css_block_footer'); ?>

		</footer>

	</div>

	<?php wp_footer(); ?>

</body>
</html>

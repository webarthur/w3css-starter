		</div>

		<footer id="footer" class="w3-white w3-margin-top w3-card" role="contentinfo">

			<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
				<div class="w3-content w3-padding-16">
					<div class="w3-row widget-area">
						<?php dynamic_sidebar( 'footer-widget-area' ); ?>
					</div><!-- .widget-area -->
				</div>
			<?php endif; ?>

			<div class="w3-dark-grey">
				<div class="w3-content w3-padding-16 w3-center w3-small">
					<div id="copyright" class="powered-by">
						<?php
						printf(
							/* translators: %s: WordPress. */
							esc_html__( 'Powered by %s with %s.', 'w3css' ),
							'<a href="' . esc_url( __( 'https://github.com/webarthur/', 'w3css' ) ) . '">webarthur</a>',
							'<a href="' . esc_url( __( 'https://www.w3schools.com/w3css/', 'w3css' ) ) . '">W3.CSS</a>'
						);
						?>
					</div><!-- .powered-by -->
				</div>
			</div>

		</footer>

	</div>

	<?php wp_footer(); ?>

</body>
</html>

					<footer class="site-footer">
		<?php if ( get_page_by_path( 'archives' ) ) : ?>
				<a href="<?php echo esc_url( site_url( 'archives' ) ); ?>"><?php esc_html_e( 'View All Posts &rarr;', 'bitStudioTheme' ); ?></a>
		<?php endif; ?>

		<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bitStudioTheme' ), '<a href="https://bitstudio.dev/bitStudioTheme/" class="site-footer">bitStudioTheme</a>', 'bitStudio.dev' );
				?>

							</footer><!-- .site-footer -->
		<?php wp_footer(); ?>

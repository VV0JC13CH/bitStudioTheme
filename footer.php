					<footer class="site-footer">
		<?php if ( get_page_by_path( 'archives' ) ) : ?>
				<a href="<?php echo esc_url( site_url( 'archives' ) ); ?>"><?php esc_html_e( 'View All Posts &rarr;', 'bitStudioTheme' ); ?></a>
		<?php endif; ?>
				<?php wp_footer(); ?>
		<?php if ( has_nav_menu( 'menu-social' ) ) : ?>
<nav class="menu-icons-navigation" role="navigation" aria-label="<?php esc_attr_e( 'SVG Icons Navigation', 'bitstudiotheme' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-social',
					'menu_id'        => 'menu-social',
					'menu_class'     => 'menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . bitstudiotheme_get_icon_svg( 'link' ),
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .menu-social-navigation -->
		<?php endif; ?>
        <nav id="site-navigation" class="menu-footer">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-footer',
								'menu_id'        => 'site-menu',
								'depth'          => 1,
								'fallback_cb'    => false,
							) );
							?>
					</nav><!-- .menu-1 -->
					<p class="site-footer">
		<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bitStudioTheme' ), '<a href="https://bitstudio.dev/bitStudioTheme/" class="site-footer">bitStudioTheme</a>', 'bitStudio.dev' );
				?></p>


							</footer><!-- .site-footer -->
							<?php wp_footer(); ?>

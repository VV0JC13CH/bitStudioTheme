<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    bitStudioTheme
 * @copyright  Copyright (c) 2019, Wojciech Bobrowski
 * @license    http://opensource.org/licenses/gpl-3.0.php GNU Public License
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'bitStudioTheme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
				<?php
				/* translators: %s: link to new post admin screen */
				printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bitStudioTheme' ), array(
					'a' => array(
						'href' => array(),
					),
				) ), esc_url( admin_url( 'post-new.php' ) ) );
				?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p>
				<?php
				esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bitStudioTheme' );
				?>
			</p>

			<?php get_search_form(); ?>

		<?php else : ?>

			<p>
				<?php
				esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bitStudioTheme' );
				?>
			</p>

			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->

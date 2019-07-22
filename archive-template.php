<?php
/**
 * Template Name: Archive Template
 *
 * @package    bitStudioTheme
 * @copyright  Copyright (c) 2019, Wojciech Bobrowski
 * @license    http://opensource.org/licenses/gpl-3.0.php GNU Public License
 */

get_template_part( 'header' );
?>
				<header>
					<h1 class="archives__heading"><?php single_post_title(); ?></h1>
				</header>

				<?php

				$args = array(
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'posts_per_page' => -1,
				);

				$bitStudioTheme_posts = new WP_Query( $args );

				if ( $bitStudioTheme_posts->have_posts() ) :

					echo '<ul class="archives__list">';

					while ( $bitStudioTheme_posts->have_posts() ) :
						$bitStudioTheme_posts->the_post();

						echo '<li><a href="' . esc_url( get_the_permalink() ) . '">' . get_the_title() . '</a><span>' . esc_attr( get_the_time( 'F j, Y' ) ) . '</span></li>';

					endwhile;

					echo '</ul>';

					wp_reset_postdata();

				else :
						echo '<p>' . esc_html__( 'Sorry, no posts matched your criteria.', 'bitStudioTheme' ) . '</p>';
				endif;
				?>


				</div><!-- .content-area -->
		</div><!-- .site-content -->
				<?php get_template_part( 'footer' ); ?>
	</body>
</html>

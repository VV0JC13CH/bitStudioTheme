<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    bitStudioTheme
 * @copyright  Copyright (c) 2019, Wojciech Bobrowski
 * @license    http://opensource.org/licenses/gpl-3.0.php GNU Public License
 */

get_template_part( 'header' );

				if ( have_posts() ) :

					while ( have_posts() ) :

						the_post();

						get_template_part( 'content' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile;

				else :

					get_template_part( 'content', 'none' );

				endif;
				?>

				</div><!-- .content-area -->
		</div><!-- .site-content -->
		<?php get_template_part( 'footer' ); ?>
	</body>
</html>

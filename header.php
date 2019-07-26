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

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
			<header class="site-header clear">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
						<p class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</p>
						<p class="site-description">
									<?php bloginfo( 'description' ); ?>
							</p>

					</div>
					<!-- .site-branding -->

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

					<nav id="site-navigation" class="menu-header">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-header',
								'menu_id'        => 'site-menu',
								'depth'          => 1,
								'fallback_cb'    => false,
							) );
							?>
					</nav><!-- .menu-1 -->
			</header><!-- .site-header -->
			<div class="site-content">
					<div class="content-area">

<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woocommerce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'woocommerce'); ?></a>

		<header id="masthead" class="site-header">

			<nav id="site-navigation" class="main-navigation">

				<?php the_custom_logo(); ?>
				<div class="custom-search">
					<?php get_search_form(); ?>
				</div>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'woocommerce'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'secondary-menu',
					'menu_class' => 'menu',
				));
				?>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
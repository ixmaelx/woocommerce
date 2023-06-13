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

			<nav id="site-navigation" class="main-navigation d-none">

				<?php the_custom_logo(); ?>
				<div class="custom-search">
					<?php get_search_form(); ?>
				</div>
				<?php if (is_active_sidebar('img_nav')) : dynamic_sidebar('img_nav');
				endif; ?>
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

			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container">
					<?php the_custom_logo(); ?>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_class' => 'navbar-nav',
					));
					?>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'secondary-menu',
						'menu_class' => 'navbar-nav',
					));
					?>



				</div>
			</nav>


		</header><!-- #masthead -->
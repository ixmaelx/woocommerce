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

			<nav class="navbar navbar-expand-lg">
				<div class="container cont-nav">
					<div class="logo">
						<?php the_custom_logo(); ?>
					</div>
					<?php if (is_active_sidebar('logo_chico')) : dynamic_sidebar('logo_chico');
					endif; ?>
					<?php aws_get_search_form(true); ?>
					<?php if (is_active_sidebar('img_nav')) : dynamic_sidebar('img_nav');
					endif; ?>

					<div class="ubicacion">
						<a href="#"><i class="fa-solid fa-location-dot me-2"></i><span>Santiago</span></a>

					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_class' => 'navbar-nav',
						'container_class' => 'collapse navbar-collapse nav-1',
						'container_id' => 'navbarNav',

					));
					?>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'secondary-menu',
						'menu_class' => 'navbar-nav',
						'container_class' => 'collapse navbar-collapse nav-2',
						'container_id' => 'navbarNav',

					));
					?>
					<script>
						$(document).ready(function() {
							$('#menu-item-67').children().first().removeAttr('href').attr('role', 'button').attr('data-bs-toggle', 'dropdown')
								.attr('aria-expanded', 'false').addClass('nav-link dropdown-toggle');
							$('#menu-item-112,#menu-item-113,#menu-item-114').removeClass().addClass('dropdown-item');
						});

						
					</script>


				</div>
			</nav>


		</header><!-- #masthead -->
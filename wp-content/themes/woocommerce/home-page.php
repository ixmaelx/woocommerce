<?php

/**
 * template name: homepage woocommerce
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package woocommerce
 */

get_header();
?>

<main id="primary" class="site-main">


	<div id="carouselExampleIndicators" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">

			<?php if (is_active_sidebar('carrusel_img1')) : dynamic_sidebar('carrusel_img1');
			endif; ?>
			<?php if (is_active_sidebar('carrusel_img2')) : dynamic_sidebar('carrusel_img2');
			endif; ?>
			<?php if (is_active_sidebar('carrusel_img3')) : dynamic_sidebar('carrusel_img3');
			endif; ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<section class="container">

		<ul class="mt-5 rectangulo-pagos">
			<li class="pagos">Paga comodo y seguro</li>
			<li class="pagos"><i class="fa-brands fa-cc-visa me-3 ico-pagos" style="color: #5697FA;"></i>Hasta 12 cuotas sin interés</li>
			<li class="pagos"><i class="fa-regular fa-credit-card me-3 ico-pagos" style="color: #5697FA;"></i>Tarjeta de debito</li>
			<li class="pagos"><i class="fa-solid fa-plus me-3 ico-pagos" style="color: #5697FA;"></i>Más medio de pago</li>
		</ul>


	</section>
	<section class="container">
		<h2 class="mt-5">Smartphones</h2>
		<div class="carrusel-productos-home mt-4" id="carrusel-smartphones">
			<?php
			$args = array(
				'posts_per_page' => 8,
				'post_type'     => 'product',
				'post_status'   => 'publish',
				'tax_query'     => array(
					array(
						'taxonomy' => 'product_cat',
						'field'   => 'slug',
						'terms'   => 'smartphones',
						'operator' => 'IN',
					),
				)
			);
			$featured_product = new WP_Query($args);
			if ($featured_product->have_posts()) {
				while ($featured_product->have_posts()) : $featured_product->the_post();
			?>
					<a href="<?php the_permalink(); ?>">
						<div class="tarjeta-producto-home">
							<?php wc_get_template_part('content', 'product'); ?>
						</div>
					</a>
			<?php
				endwhile;
			} else {
				echo __('Lo sentimos no hay productos');
			}
			wp_reset_postdata();
			?>

		</div>
	</section>
	<section class="container">
		<h2 class="mt-5">Notebooks</h2>
		<div class="carrusel-productos-home mt-4" id="carrusel-notebooks">
			<?php
			$args = array(
				'posts_per_page' => 8,
				'post_type'     => 'product',
				'post_status'   => 'publish',
				'tax_query'     => array(
					array(
						'taxonomy' => 'product_cat',
						'field'   => 'slug',
						'terms'   => 'notebooks',
						'operator' => 'IN',
					),
				)
			);
			$featured_product = new WP_Query($args);
			if ($featured_product->have_posts()) {
				while ($featured_product->have_posts()) : $featured_product->the_post();
			?>
					<a href="<?php the_permalink(); ?>">
						<div class="tarjeta-producto-home">
							<?php wc_get_template_part('content', 'product'); ?>
						</div>
					</a>
			<?php
				endwhile;
			} else {
				echo __('Lo sentimos no hay productos');
			}
			wp_reset_postdata();
			?>

		</div>
	</section>
	<section class="sec-beneficios mt-5">
		<div class="container cont-beneficios">
			<div class="row-benefi">
				<?php if (is_active_sidebar('beneficio_1')) : dynamic_sidebar('beneficio_1');
				endif; ?>
			</div>
			<div class="row-benefi">
				<?php if (is_active_sidebar('beneficio_2')) : dynamic_sidebar('beneficio_2');
				endif; ?>
			</div>
			<div class="row-benefi">
				<?php if (is_active_sidebar('beneficio_3')) : dynamic_sidebar('beneficio_3');
				endif; ?>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php

get_footer();

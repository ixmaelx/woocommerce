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
			<?php if (is_active_sidebar('carrusel_img1')) : dynamic_sidebar('carrusel_img2');
			endif; ?>
			<?php if (is_active_sidebar('carrusel_img1')) : dynamic_sidebar('carrusel_img3');
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

	<div class="container">
		<ul class="mt-5 rectangulo-pagos">
			<li class="pagos">Paga comodo y seguro</li>
			<li class="pagos"><i class="fa-brands fa-cc-visa me-3" style="color: #5697FA;"></i>Hasta 12 cuotas sin interés</li>
			<li class="pagos"><i class="fa-regular fa-credit-card me-3" style="color: #5697FA;"></i>Tarjeta de debito</li>
			<li class="pagos"><i class="fa-solid fa-plus me-3" style="color: #5697FA;"></i>Más medio de pago</li>
		</ul>

		<h2 class="mt-5">nuevos productos</h2>


	</div>

</main><!-- #main -->

<?php

get_footer();

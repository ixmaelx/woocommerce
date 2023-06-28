<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<div class="container container-single py-5">
		<div class="mini-header">
			<a href="">Volver</a>
		</div>
		<div class="cuadro-cosas">

			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action('woocommerce_before_single_product_summary');
			?>

			<div class="summary entry-summary">
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action('woocommerce_single_product_summary');
				?>
			</div>

			<?php
			/**
			 * Hook: woocommerce_after_single_product_summary.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action('woocommerce_after_single_product_summary');
			?>
			<div class="summary-2">
				<h3 class="mini-h3">Informacion sobre el vendedor</h3>
			</div>
			<div class="descrip-single mb-5">
				<h2 class="titu-secs mb-4">Descripcion</h2>
				<?php the_content(); ?>
			</div>
			<div class="summary-2">
				<h3 class="mini-h3">Medios de pago</h3>
			</div>
		</div>

		<section class="container">
		<h2 class="mt-5 titu-secs">Más productos</h2>
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
	</div>
</div>

<?php do_action('woocommerce_after_single_product'); ?>
<?php
add_post_type_support('page','excerpt');

require get_template_directory() . '/assets/inc/css-functions.php';
require get_template_directory() . '/assets/inc/js-functions.php';
require get_template_directory() . '/assets/inc/modulos-functions.php';



// widgets
require get_template_directory() . '/assets/inc/widgets-functions.php';

remove_action( 'woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open' );
remove_action( 'woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_close' );
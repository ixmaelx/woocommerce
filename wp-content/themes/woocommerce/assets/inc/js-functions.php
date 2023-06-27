<?php
function comercio_script(){
    if (!is_admin()) {
        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', false, false);
        wp_enqueue_script('bootstrap-js');
        wp_register_script('jq', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', true);
        wp_enqueue_script('jq');
        wp_register_script('carrusel', get_bloginfo('template_directory') . '/assets/librerias/js/slick.js', array('jquery'), true);
        wp_enqueue_script('carrusel' ,array('jquery'), true);
        wp_register_script('mi-archivo', get_bloginfo('template_directory') . '/assets/librerias/js/mi-archivo.js', array('jquery'), true);
        wp_enqueue_script('mi-archivo', array('jquery'), true);
    }
}
add_action("wp_enqueue_scripts", "comercio_script", 1);

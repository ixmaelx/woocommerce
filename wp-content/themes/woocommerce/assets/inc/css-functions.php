<?php
function css_wordpress(){
    wp_register_style('estilos', get_bloginfo('template_directory') . '/assets/librerias/css/style.css');
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css','all');
    wp_register_style('fuente','https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap','all');
    wp_enqueue_style('fuente');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('estilos');
}
add_action('wp_enqueue_scripts','css_wordpress');


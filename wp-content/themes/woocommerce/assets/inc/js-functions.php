<?php
function comercio_script(){
    if (!is_admin()) {
        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', false, false);
        wp_enqueue_script('bootstrap-js');
        wp_register_script('jq', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', false, false);
        wp_enqueue_script('jq');
    }
}
add_action("wp_enqueue_scripts", "comercio_script", 1);

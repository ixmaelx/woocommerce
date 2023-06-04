<?php  
function widget_disable(){
  remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme','widget_disable');

function custom_theme_menus() {
  register_nav_menus( array(
      'secondary-menu' => 'Menú Secundario',
  ) );
}
add_action( 'after_setup_theme', 'custom_theme_menus' );
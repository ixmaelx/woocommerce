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


/*widget nav*/
function zona_widget(){
    register_sidebar(
    array('name'=>'imagen nav', 'id'=>'img_nav',// le damos nombre e id al footer
          'before_widget'=>'<div id="%1$s" class="">', // añadimos clase e id 
          'after_widget'=>'</div>',// cerramos el div
    )
    );
  }
  add_action('widgets_init','zona_widget');
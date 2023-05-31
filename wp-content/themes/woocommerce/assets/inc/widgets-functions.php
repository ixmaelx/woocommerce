<?php  
function widget_disable(){
  remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme','widget_disable');

/*widget assets*/
function zona_widget(){
/*sidebar 1*/
  register_sidebar(
  array('name'=>'footer columna 1', 'id'=>'widget_uno',// le damos nombre e id al footer
        'before_widget'=>'<div id="%1$s" class="col-4">', // añadimos clase e id 
        'after_widget'=>'</div>',// cerramos el div
        'before_title'=>'<h5 class="titulo-menu-footer">',// contenedor de titulo
        'after_title'=> '</h5>'// cerramos titulo
  )
  );
/*sidebar 1*/



}
add_action('widgets_init','zona_widget');
/*widget assets*/
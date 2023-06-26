<?php
function widget_disable()
{
  remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'widget_disable');

function custom_theme_menus()
{
  register_nav_menus(array(
    'secondary-menu' => 'Menú Secundario',
  ));
}
add_action('after_setup_theme', 'custom_theme_menus');


/*widget nav*/
function zona_widget()
{
  register_sidebar(
    array(
      'name' => 'imagen nav', 'id' => 'img_nav', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="disney-nav">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
}
add_action('widgets_init', 'zona_widget');
function logo_chico()
{
  register_sidebar(
    array(
      'name' => 'logo chico', 'id' => 'logo_chico', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="logo-chico">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
}
add_action('widgets_init', 'logo_chico');

/*widget carrusel*/
function widget_carrusel()
{
  register_sidebar(
    array(
      'name' => 'carrusel 1', 'id' => 'carrusel_img1', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="carousel-item active" data-bs-interval="3000">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
  register_sidebar(
    array(
      'name' => 'carrusel 2', 'id' => 'carrusel_img2', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="carousel-item" data-bs-interval="3000">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
  register_sidebar(
    array(
      'name' => 'carrusel 3', 'id' => 'carrusel_img3', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="carousel-item" data-bs-interval="3000">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
}
add_action('widgets_init', 'widget_carrusel');


function beneficios()
{
  register_sidebar(
    array(
      'name' => 'beneficios-1', 'id' => 'beneficio_1', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="wid-benefi">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
  register_sidebar(
    array(
      'name' => 'beneficios-2', 'id' => 'beneficio_2', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="wid-benefi">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
  register_sidebar(
    array(
      'name' => 'beneficios-3', 'id' => 'beneficio_3', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="wid-benefi">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
}
add_action('widgets_init', 'beneficios');

function m_puntos()
{
  register_sidebar(
    array(
      'name' => 'm-puntos1', 'id' => 'm_puntos_1', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="wid-mpunt">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
  register_sidebar(
    array(
      'name' => 'm-puntos2', 'id' => 'm_puntos_2', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="wid-mpunt">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
  register_sidebar(
    array(
      'name' => 'm-puntos3', 'id' => 'm_puntos_3', // le damos nombre e id al footer
      'before_widget' => '<div id="%1$s" class="wid-mpunt">', // añadimos clase e id 
      'after_widget' => '</div>', // cerramos el div
    )
  );
}
add_action('widgets_init', 'm_puntos');


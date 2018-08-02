<?php
/**
 * miTheme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage miTheme
 * @since Mi Tema 1.0
 */

 # Agregamos el soporte para los thumbnails
add_theme_support('post-thumbnails');
# Agregamos un tamaño de imagen y permitimos que la imagen se corte si no cabe
add_image_size('homepage-thumb', 745, 372, true);

# Registramos dos tipos de menú para nuestro tema
register_nav_menus( array(
    'menu_top' => 'Menú principal',
    'menu_footer'=> 'Menú footer'
));

# Esta función registra una sección para agregar widgets.
register_sidebar(array(
    'id'=>'header',
    'name'=>'Header',
    'before_widget'=>'<div>',
    'after_widget'=>'</div>',
    'before_title'=>'<h3>',
    'after_title'=>'</h3>'
));

register_sidebar(array(
    'id'=>'sidebar',
    'name'=>'Sidebar',
    'before_widget'=>'<div class="widget"><div class="titulo-seccion">',
    'after_widget'=>'</div></div>',
    'before_title'=>'<h3>',
    'after_title'=>'</h3>'
));

register_sidebar(array(
    'id'=>'footer',
    'name'=>'Footer',
    'before_widget'=>'<div>',
    'after_widget'=>'</div>',
    'before_title'=>'<h3>',
    'after_title'=>'</h3>'
));
?>
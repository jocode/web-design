<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 * @package WordPress
 * @subpackage miTheme
 * @since Mi Tema 1.0
 */ 
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php 
            if ( is_home() ){
                echo get_bloginfo('name');
            } else if ( is_single() ){
                echo the_title();
            } else {
                echo get_bloginfo('name'); 
            }
        ?>
    </title>
    <!-- wordpress head-->
    <?php
        wp_head();
    ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-xs-12 col-sm-6">
                    <a href="<?php bloginfo('url'); ?>">Icono del sitio</a>
                </div>
                <div class="redes-sociales col-xs-12 col-sm-6">
                    <a class="youtube" href="http://youtube.com">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a class="facebook" href="http://twitter.com">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="twitter" href="http://facebook.com">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>

        <nav class="menu">
            <div class="container">
                <div class="row">
                    <ul class="col-md-12">
                        <?php wp_nav_menu(array(
                            'container'=>false, 
                            'menu_class'=>'', 
                            'items_wrap'=>'<ul class="col-md-12">%3$s</ul>',
                            'theme_location'=>'menu_top'
                        )); ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="ad container hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="Banner Publicitario">
                </div>
            </div>
        </div>

        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header')): endif;  ?>

    </header>
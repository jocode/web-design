<?php 
/**
 * The template for displaying the footer
 * Contains the closing of the "site-content" div and all content after.
 * 
 * @package WordPress
 * @subpackage miTheme
 * @since Mi Tema 1.0
 */
 ?>

<footer>
        <div class="ad container hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="Banner Publicitario">
                </div>
            </div>
        </div>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer')): endif;  ?>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php wp_nav_menu(array(
                            'container'=>false, 
                            'menu_class'=>'', 
                            'items_wrap'=>'<ul class="col-md-12">%3$s</ul>',
                            'theme_location'=>'menu_footer'
                        )); ?>
                    </div>
                </div>
            </div>
        </nav>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Sitio web creado por Johan Mosquera</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- wordpress footer -->
    <?php wp_footer(); ?>
</body>

</html>
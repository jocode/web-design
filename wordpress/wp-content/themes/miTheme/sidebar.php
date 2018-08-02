<?php
/**
 * The sidebar containing the main widget area
 * 
 * @package WordPress
 * @subpackage miTheme
 * @since Mi Tema 1.0
 */
?>
<aside class="sidebar col-md-4">
                <div class="widget redes-sociales">
                    <div class="titulo-seccion">
                        <h3>Síguenos</h3>
                        <div class="redes-sociales">
                            <a href="#" class="youtube"><i class="icono fa fa-youtube-play"></i><span class="seguidores">130k</span></a>
                            <a href="#" class="twitter"><i class="icono fa fa-twitter"></i><span class="seguidores">60k</span></a>
                            <a href="#" class="facebook"><i class="icono fa fa-facebook"></i><span class="seguidores">6.5k</span></a>
                        </div>
                    </div>
                </div>

                <div class="widget boletin">
                    <div class="titulo-seccion">
                        <h3>Suscríbete</h3>
                        <form class="formulario">
                            <label for="email">Suscríbete a nuestro boletín</label>
                            <input type="email" name="email" id="email" placeholder="Correo electrónico" required>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>

                <div class="widget">
                    <div class="contenedor-ad">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ad2.jpg" alt="Anuncios"></a>
                    </div>
                </div>

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')): endif;  ?>
            </aside>
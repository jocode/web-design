<?php 
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage miTheme
 * @since Mi Tema 1.0
 */
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <main class="col-md-12">
                <div class="row single-post">
                    <article class="col-md-12 post">
                        <div class="contenedor">
                            <div class="info text-center">
                                <h2 class="titulo">Archivo no encontrado</h2>
                                <div class="texto">
                                    <p>La página o archivo que buscas no se encuentra. Por favor verifica el enlace para asegurarse que sea correcto.</p>
                                    <br>
                                    <a href="<?php bloginfo('url'); ?>">Ir al inicio</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?> 
<?php
/**
 * The template for displaying all single posts and attachments
 * 
 * @package WordPress
 * @subpackage miTheme
 * @since Mi Tema 1.0
 */
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <main class="col-md-8">
    
                <div class="row posts single-post">
                    <?php if ( have_posts() ): while (have_posts()): the_post(); ?>
                    <!-- Articles -->
                    <article class="col-md-12 post">
                        <div class="contenedor">
                            <div class="thumb">
                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('homepage_thumb');
                                else: ?>
                                <img src="<?php bloginfo('template_url'); ?>/img/1.jpg" alt="Imágen del artículo">
                                <?php endif; ?>
                            </div>
                            <div class="info">
                                <h2 class="titulo"><?php the_title(); ?></h2>
                                <p class="fecha"><?php echo get_the_date(); ?></p>
                                <div class="categorias">
                                    <?php the_category(); ?>
                                </div>
                                <div class="texto"><?php echo the_content(); ?></div>
                            </div>
                        </div>
                    </article>

                    <section class="comentarios col-sm-12">
                        <?php get_comments(); ?>
                    </section>
                    <?php endwhile; else: ?>
                    <article class="col-md-6 post">
                        <div class="contenedor">
                            <div class="info">
                                <h2 class="titulo">El artículo que buscas no existe</h2>
                                <div class="extracto"><p>Revisa que la url que hayas ingresado sea correcta</p></div>
                            </div>
                        </div>
                    </article>
                    <?php endif; ?>
                </div>
            </main>

            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?> 
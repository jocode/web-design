<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
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
                <div class="row titulo-seccion">
                    <div class="col-md-12"> 
                        <h3>Lo más reciente</h3>
                    </div>
                </div>
                <div class="row posts">
                    <?php if ( have_posts() ): while (have_posts()): the_post(); ?>
                    <!-- Articles -->
                    <article class="col-md-6 post">
                        <div class="contenedor">
                            <div class="thumb">
                                <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('homepage_thumb');
                                else: ?>
                                <img src="<?php bloginfo('template_url'); ?>/img/1.jpg" alt="Imágen del artículo">
                                <?php endif; ?>
                                </a>
                            </div>
                            <div class="info">
                                <h2 class="titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="fecha"><?php echo get_the_date(); ?></p>
                                <div class="extracto"><?php echo the_excerpt(); ?></div>
                                <div class="categorias">
                                    <?php the_category(); ?>
                                </div>
                            </div>
                        </div>
                    </article>
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

                <section class="row paginacion">
                    <div class="col-md-12">
                        <div class="pagination">
                            <?php wp_pagenavi(); ?>
                        </div>
                    </div>
                </section>
            </main>

            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?> 

   
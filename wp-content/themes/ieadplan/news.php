<?php
/*
 * Template Name: Notícias Listagem
 */
 ?>

<?php get_header(); ?>

    <!-- Marketing messaging and featurettes
        ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">

        <div class="row">
            <h1 class="title border-yellow">Notícias</h1>
            <?php
             $posts = new WP_Query('post_type=post&posts_per_page=10&category_name=noticias');
                // Se houver posts
                if($posts->have_posts()):
                    // Enquanto houver posts, chame o post
                    while ($posts->have_posts()): $posts->the_post();

                        ?>
                        <div class="col-md-6">
                            <div class="row featurette">
                                <div class="col-md-5"><img class="featurette-image img-responsive center-block" src="<?php the_post_thumbnail_url(array(500,430)); ?>" alt="Generic placeholder image"></div>
                                <div class="col-md-7">
                                <h2 class="featurette-heading"><?php the_title();?></h2>
                                <p class="lead"><?php the_excerpt();?></p>
                                <a class="read-more" href="<?php the_permalink() ?>">Continuar lendo<img src="<?php echo get_template_directory_uri() ?>//assets/img/long-arrow-right.svg"></a>
                                </div>
                            </div>
                            <hr class="featurette-divider">
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    ?>
                    <p>Não há posts para mostrar</p>
                    <?php
                endif;
                ?>
        </div>
    </div><!-- /.container -->

<?php get_footer(); ?>
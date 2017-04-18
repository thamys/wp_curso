<?php
/*
 * Template Name: Home
 */
?>

<?php get_header(); ?>

    <div class="conteudo">
        <main>
            <!-- Carousel
            ================================================== -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="first-slide" src="<?php echo get_template_directory_uri() ?>./assets/img/banner.png" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Horários de Cultos</h1>
                                <div class="col-md-3">
                                    <p><strong>Domingo:</strong><br/>
                                        09:00 - Escola Bíblica Dominical<br/>
                                        19:00 - Culto de Louvor e Adoração</p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong>Terças-Feiras:</strong><br/>
                                        19:30 - Culto de Estudo Bíblico</p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong>Quartas-Feiras:</strong><br/>
                                        19:30 - Culto de Oração</p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong>Quintas-Feiras:</strong><br/>
                                        19:00 - Culto de Louvor e Adoração</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.carousel -->

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <div class="container">
                    <h1>
                        <img id="hands-in-heart" src="<?php echo get_template_directory_uri() ?>/assets/img/hands-in-heart.png" alt="hands-in-heart" title="hands-in-heart"/>
                        Venha nos fazer uma visita !
                    </h1>
                </div>
            </div>


            <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container marketing">

                <!-- START THE FEATURETTES -->
                <div class="row news-home">
                    <h1 class="title border-red">Notícias Recentes</h1>

                    <div class="col-md-8">
                        <?php
                        $featuredNews = new WP_Query('post_type=post&posts_per_page=2&category_name=noticias');
                        // Se houver posts
                        if($featuredNews->have_posts()):
                            // Enquanto houver posts, chame o post
                            while ($featuredNews->have_posts()): $featuredNews->the_post();

                                ?>
                                <div class="row featurette">
                                    <div class="col-md-5">
                                        <?php the_post_thumbnail(array(300,300), array(
                                            'class' => 'featurette-image img-responsive center-block'
                                        )); ?>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="featurette-heading"> <?php the_title(); ?> </h2>
                                        <p class="lead"><?php the_content() ?></p>
                                        <a href="#" class="read-more">Continuar lendo <img src="<?php echo get_template_directory_uri() ?>./assets/img/long-arrow-right.svg"></a>
                                    </div>
                                </div>
                                <hr class="featurette-divider">
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            ?>
                            <p>Não há notícias para mostrar</p>
                            <?php
                        endif;
                        ?>
                    </div>
                    <div class="col-md-4">

                        <?php
                        $args = array(
                            'post_type=post'=>'post',
                            'posts_per_page'=>'3',
                            'category_name'=>'noticias',
                            'offset'=>2
                        );
                        $ordinaryNews = new WP_Query($args);
                        // Se houver posts
                        if($ordinaryNews->have_posts()):
                            // Enquanto houver posts, chame o post
                            while ($ordinaryNews->have_posts()): $ordinaryNews->the_post();

                                ?>
                                <div class="row featurette">
                                    <div class="col-md-12">
                                        <h2 class="featurette-heading"><?php the_title(); ?></h2>
                                        <p class="lead"><?php the_content() ?></p>
                                        <a href="#" class="read-more">Continuar lendo <img src="<?php echo get_template_directory_uri() ?>./assets/img/long-arrow-right.svg"></a>
                                    </div>
                                </div>

                                <hr class="featurette-divider">
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            ?>
                            <p>Não há notícias para mostrar</p>
                            <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div><!-- /.container -->
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="parallax">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row events-home">
                            <h1 class="title border-yellow">Calendário da Igreja</h1>
                            <div class="col-md-6">
                                <div class="event-home">
                                    <div class="date">
                                        <span class="day">26</span>
                                        <hr class="date-divider">
                                        <span class="month">12</span>
                                    </div>
                                    <div class="content">
                                        <h2 class="event-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                                    </div>
                                </div>
                                <hr class="events-divider">
                            </div>
                            <div class="col-md-6">
                                <div class="event-home">
                                    <div class="date">
                                        <span class="day">26</span>
                                        <hr class="date-divider">
                                        <span class="month">12</span>
                                    </div>
                                    <div class="content">
                                        <h2 class="event-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                                    </div>
                                </div>
                                <hr class="events-divider">
                            </div>
                            <div class="col-md-6">
                                <div class="event-home">
                                    <div class="date">
                                        <span class="day">26</span>
                                        <hr class="date-divider">
                                        <span class="month">12</span>
                                    </div>
                                    <div class="content">
                                        <h2 class="event-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-home">
                                    <div class="date">
                                        <span class="day">26</span>
                                        <hr class="date-divider">
                                        <span class="month">12</span>
                                    </div>
                                    <div class="content">
                                        <h2 class="event-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-6">
                    <?php
                    $featuredPost = new WP_Query('post_type=post&posts_per_page=1&category_name=blog');
                    // Se houver posts
                    if($featuredPost->have_posts()):
                        // Enquanto houver posts, chame o post
                        while ($featuredPost->have_posts()): $featuredPost->the_post();

                            ?>
                            <div class="featurette-post"  style="background-image: url(<?php the_post_thumbnail_url(array(640,600)); ?>);">
                                <div class="align-items-center">
                                    <div class="post-abstract">
                                        <h1 class="title border-red">Ultimo post</h1>
                                        <h2 class="post-heading"><?php the_title(); ?></h2>
                                        <p class="lead"><?php the_content() ?></p>
                                        <a href="#" class="read-more">Continuar lendo <img src="<?php echo get_template_directory_uri() ?>./assets/img/long-arrow-right.svg"></a>
                                    </div>
                                </div>
                            </div>
                            <hr class="featurette-divider">
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        ?>
                        <p>Não há notícias para mostrar</p>
                        <?php
                    endif;
                    ?>
                </div>
                <div class="col-md-6 featurette-posts">
                    <h1 class="title border-red">Posts Recentes</h1>
                    <?php
                    $args = array(
                        'post_type=post'=>'post',
                        'posts_per_page'=>'2',
                        'category_name'=>'blog',
                        'offset'=>1
                    );
                    $ordinaryPost = new WP_Query($args);
                    // Se houver posts
                    if($ordinaryPost->have_posts()):
                        // Enquanto houver posts, chame o post
                        while ($ordinaryPost->have_posts()): $ordinaryPost->the_post();

                            ?>
                            <div class="row featurette">
                                <div class="col-md-4">
                                    <?php the_post_thumbnail(array(160,160), array(
                                        'class' => 'featurette-image img-responsive center-block'
                                    )); ?>
                                </div>
                                <div class="col-md-8">
                                    <h2 class="featurette-heading"><?php the_title(); ?></h2>
                                    <!--
                                 <p> Publicado em: <?php echo get_the_date(); ?> por <?php the_author(); ?>. </p>
                                 <p> Categoria: <?php the_category(); ?> </p>
                                 <p> <?php the_tags('Tags: ', ','); ?> </p>
                                 -->
                                    <p class="lead"><?php the_excerpt() ?></p>
                                    <a href="#" class="read-more">Continuar lendo <img src="<?php echo get_template_directory_uri() ?>./assets/img/long-arrow-right.svg"></a>
                                </div>
                            </div>

                            <hr class="featurette-divider">
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        ?>
                        <p>Não há notícias para mostrar</p>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>
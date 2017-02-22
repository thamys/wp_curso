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
                    <img class="first-slide" src="<?php header_image() ?>" alt="First slide">
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
                    <img id="hands-in-heart" src="<?php echo get_template_directory_uri() ?>./assets/img/hands-in-heart.png" alt="hands-in-heart" title="hands-in-heart"/>
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
                    // Se houver posts
                    if(have_posts()):
                        // Enquanto houver posts, chame o post
                        while (have_posts()): the_post();

                            ?>
                            <div class="row featurette">
                                <div class="col-md-5">
                                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
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
                    else:
                        ?>
                        <p>Não há notícias para mostrar</p>
                        <?php
                    endif;
                    ?>
                </div>
                <div class="col-md-4">

                    <?php
                    // Se houver posts
                    if(have_posts()):
                        // Enquanto houver posts, chame o post
                        while (have_posts()): the_post();

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
        <div class="container pb-20">
            <div class="col-md-6">
                <div class="featurette-post"  style="background-image: url('./assets/img/banner.png');">
                    <div class="align-items-center">
                        <div class="post-abstract">
                            <h1 class="title border-red">Ultimo post</h1>
                            <h2 class="post-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            <a href="#" class="read-more">Continuar lendo <img src="<?php echo get_template_directory_uri() ?>./assets/img/long-arrow-right.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 featurette-posts">
                <h1 class="title border-red">Posts Recentes</h1>
                <?php
                // Se houver posts
                if(have_posts()):
                    // Enquanto houver posts, chame o post
                    while (have_posts()): the_post();

                        ?>
                        <div class="row featurette">
                            <div class="col-md-4">
                                <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                            </div>
                            <div class="col-md-8">
                                <h2 class="featurette-heading"><?php the_title(); ?></h2>
                                <p> Publicado em: <?php echo get_the_date(); ?> por <?php the_author(); ?>. </p>
                                <p> Categoria: <?php the_category(); ?> </p>
                                <p> <?php the_tags('Tags: ', ','); ?> </p>
                                <p class="lead"><?php the_content() ?></p>
                                <a href="#" class="read-more">Continuar lendo <img src="<?php echo get_template_directory_uri() ?>./assets/img/long-arrow-right.svg"></a>
                            </div>
                        </div>

                        <hr class="featurette-divider">
                        <?php
                    endwhile;
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

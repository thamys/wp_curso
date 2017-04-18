<?php get_header(); ?>

    <!-- Marketing messaging and featurettes
            ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container">

        <!-- START THE FEATURETTES -->
    <div class="row">
        <h1 class="title border-yellow">Blog</h1>
        <div class="col-md-4 pull-right">
            <div class="sidebar">
                <div class="categories">
                    <h2 class="title border-red">Categorias</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li> <a href="#">Mensagens do Pastor</a></li>
                        <li> <a href="#">Mocidade Ativa</a></li>
                        <li> <a href="#">Casamento Blindado</a></li>
                    </ul>
                </div>
                <div class="archives">
                    <h2 class="title border-red">Arquivo</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li> <a href="#">Março (20)</a></li>
                        <li> <a href="#">Fevereiro (40)</a></li>
                        <li> <a href="#">Janeiro (32)</a></li>
                        <li> <a href="#">Anteriores (+200)</a></li>
                    </ul>
                </div>
                <div class="comments">
                    <h2 class="title border-red">Comentários</h2>
                    <div class="comments-list">
                        <div class="comment">
                            <blockquote class="blockquote"> 
                                <p class="mb-0">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                                <footer class="blockquote-footer">Comentário em: &nbsp;<a href="#">Como agradar a Deus? &nbsp;</a>por &nbsp;
                                <cite title="Paloma Almeida">Paloma Almeida</cite>
                                </footer>
                            </blockquote>
                        </div>
                        <div class="comment">
                            <blockquote class="blockquote"> 
                                <p class="mb-0">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                                <footer class="blockquote-footer">Comentário em: &nbsp;<a href="#">Como agradar a Deus? &nbsp;</a>por &nbsp;
                                <cite title="Paloma Almeida">Paloma Almeida</cite>
                                </footer>
                            </blockquote>
                        </div>
                        <div class="comment">
                            <blockquote class="blockquote"> 
                                <p class="mb-0">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
                                <footer class="blockquote-footer">Comentário em: &nbsp;<a href="#">Como agradar a Deus? &nbsp;</a>por &nbsp;
                                <cite title="Paloma Almeida">Paloma Almeida</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-md-8 pull-left">
        <?php
             $posts = new WP_Query('post_type=post&posts_per_page=10&category_name=blog');
                // Se houver posts
                if($posts->have_posts()):
                    // Enquanto houver posts, chame o post
                    while ($posts->have_posts()): $posts->the_post();

                        ?>
                        <div class="row featurette mt-10">
                            <div class="col-md-5">
                                <img class="featurette-image img-responsive center-block" src="<?php the_post_thumbnail_url(array(500,350)); ?>" alt="Generic placeholder image">
                            </div>
                            <div class="col-md-7">
                                <h2 class="featurette-heading"><?php the_title();?></h2>
                                <p class="lead"><?php the_excerpt() ?></p>
                                <a class="read-more" href="#">Continuar lendo<img src="<?php echo get_template_directory_uri() ?>/assets/img/long-arrow-right.svg"></a>
                            </div>
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
    </div>
</div><!-- /.container -->

<?php get_footer(); ?>
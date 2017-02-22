<?php
/*
 * Template Name: Blog Listagem
 */
 ?>

<?php get_header(); ?>

    <!-- Marketing messaging and featurettes
        ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">

        <!-- START THE FEATURETTES -->
        <div class="row">
            <h1 class="title border-yellow">Blog</h1>
            <div class="col-md-3 pull-right">
                <h1 class="title border-red">Arquivo</h1>
                <ul>
                    <li>
                        <a href="#">Dezembro(30)</a>
                    </li>
                    <li>
                        <a href="#">Novembro(30)</a>
                    </li>
                    <li>
                        <a href="#">Outubro(30)</a>
                    </li>
                    <li>
                        <a href="#">Setembro(30)</a>
                    </li>
                    <li>
                        <a href="#">Agosto(30)</a>
                    </li>
                    <li>
                        <a href="#">mais antigas (+500)</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 pull-left">
                <div class="row posts">
                    <div class="col-md-4 post">
                        <h3>Falando sobre santificação</h3>
                        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x350/auto" alt="Generic placeholder image">
                        <div class="resume">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <a href="#" class="read-more">Continuar lendo <img src="<?php echo get_template_directory_uri() ?>./assets/img/long-arrow-right.svg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

<?php get_footer(); ?>
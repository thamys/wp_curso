<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>IEADPlan Muriaé</title>
    <?php wp_head() ?>

  </head>
  <body <?php body_class(); ?>>
    <header>
        <div class="navbar-wrapper" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
            <div class="pre-nav">
                <div class="container">
                    <div class="col-md-5">
                        <address>
                            <img id="address-icon" src="<?php echo get_template_directory_uri() ?>./assets/img/marker-white.svg"/>
                            <p>Rua Florinda Marques, 25, Planalto, Muriaé - MG</p>
                        </address>
                    </div>
                    <div class="col-md-4">
                        <a id="phone" href="phone:2332324545">
                            <img id="phone-icon" src="<?php echo get_template_directory_uri() ?>./assets/img/phone-white.svg"/>
                            <p>(32) 3232-4545</p>
                        </a>
                    </div>
                    <div class="col-md-2 text-right">
                        <a id="facebook-top" href="#">
                            <img src="<?php echo get_template_directory_uri() ?>./assets/img/facebook.svg"/>
                        </a>
                        <a id="youtube-top" href="#">
                            <img src="<?php echo get_template_directory_uri() ?>./assets/img/youtube.svg"/>
                        </a>
                    </div>
                    <div class="col-md-1 text-right">
                        <a id="search-top" href="#">
                            <img src="<?php echo get_template_directory_uri() ?>./assets/img/search.svg"/>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() ?>./assets/brand/brand-icon.svg" alt="Logo IEADPlan Muriaé" title="IEADPlan Muriáe"/> </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <?php
                        wp_nav_menu(array('theme_location' => 'menu_principal', 'menu_class' => 'nav navbar-nav nav-justified'));
                    ?>
                  <!--<ul class="nav navbar-nav nav-justified">
                    <li><a href="#"><span>Jesus</span></a></li>
                    <li class="active"><a href="index.html"><span>Home</span></a></li>
                    <li><a href="about-us.html"><span>A Igreja</span></a></li>
                    <li><a href="#ews"><span>Notícias</span></a></li>
                    <li><a href="#blog"><span>Blog</span></a></li>
                    <li><a href="#events"><span>Eventos</span></a></li>
                    <li><a href="contact-us.html"><span>Contato</span></a></li>
                  </ul>-->
                </div>
              </div>
            </nav>
        </div>
    </header>
    <div class="breadcrumb">
        <ul class="container breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="news.html">Notícias</a></li>
        <li class="active">Novos Membros</li>
        </ul>
    </div>
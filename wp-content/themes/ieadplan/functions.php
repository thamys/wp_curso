<?php

/* --------------------------
 * Função para carregar os scripts
 * -------------------------- */
function carrega_scripts(){

    /* --------------------------
     * Scripts in head
     * -------------------------- */
    /* Bootstrap core CSS */
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1,0', 'all');

    /* IE10 viewport hack for Surface/desktop Windows 8 bug */
    wp_enqueue_style('ie10-viewport-bug-workaround', get_template_directory_uri() . '/assets/css/ie10-viewport-bug-workaround.css', array(), '1,0', 'all');

    /* Just for debugging purposes. Don't actually copy these 2 lines! */
    /*[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]*/
    wp_enqueue_script('ie-emulation-modes-warning', get_template_directory_uri() . '/assets/js/ie-emulation-modes-warning.js', array(), '1,0', 'all', false);

    /* HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries */
    /*[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]*/
    
    /* Custom fonts for this template */
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Abel|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', array(), '1,0', 'all');

    /* Custom styles for this template */

    //if ( is_home() )
        wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/home.css', array(), '1,0', 'all');
    //if ( is_page('jesus'))
        wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/jesus.css', array(), '1,0', 'all');
    //if ( is_page('a-igreja') ) // using page slug
        wp_enqueue_style('a-igreja', get_template_directory_uri() . '/assets/css/the-church.css', array(), '1,0', 'all');
    //if ( is_page('blog') ) // using page slug
        wp_enqueue_style('blog', get_template_directory_uri() . '/assets/css/blog.css', array(), '1,0', 'all');
        //if ( is_page('noticias'))
        wp_enqueue_style('noticias', get_template_directory_uri() . '/assets/css/news.css', array(), '1,0', 'all');
        //if ( is_page('eventos'))
        wp_enqueue_style('eventos', get_template_directory_uri() . '/assets/css/events.css', array(), '1,0', 'all');
    //if ( is_page('contato') ) // using page slug
        wp_enqueue_style('contato', get_template_directory_uri() . '/assets/css/contact-us.css', array(), '1,0', 'all');
    
    /* Um arquivo default */
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/layout.css', array(), '1,0', 'all');



    /* --------------------------
     * Scripts in footer
     * -------------------------- */
    /* Bootstrap core JavaScript
    ================================================== */
    /* Placed at the end of the document so the pages load faster */
    /*
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    */
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1,0', 'all', true);
    /* Just to make our placeholder images work. Don't actually copy the next line! */
    wp_enqueue_script('holder', get_template_directory_uri() . '/assets/js/vendor/holder.min.js', array(), '1,0', 'all', true);
    /* IE10 viewport hack for Surface/desktop Windows 8 bug */
    wp_enqueue_script('ie10-viewport-bug-workaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', array(), '1,0', 'all', true);
}

add_action('wp_enqueue_scripts', 'carrega_scripts');

/* --------------------------
 * Função para menus
 * -------------------------- */
register_nav_menus(
    array(
        'menu_principal' => 'Menu Principal'
    )
);

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
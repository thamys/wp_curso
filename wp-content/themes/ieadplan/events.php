<?php
/*
 * Template Name: Eventos Listagem
 */
 ?>

<?php get_header(); ?>

    <div class="container">
      <!-- START THE FEATURETTES-->
      <div class="row">
        <h1 class="title border-yellow">Eventos</h1>
        <div class="col-md-6">
          <div class="row featurette">
            <div class="col-md-5">
              <div class="date"><span class="day">25</span><span class="month">05</span></div><img class="featurette-image img-responsive center-block" data-src="holder.js/500x430/auto" alt="Generic placeholder image">
            </div>
            <div class="col-md-7">
              <h2 class="featurette-heading">First featurette heading.<span class="text-muted">It'll blow your mind.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              <a class="read-more" href="event-details.html">Ver detalhes<img src="<?php echo get_template_directory_uri() ?>/assets/img/long-arrow-right.svg"></a>
            </div>
          </div>
          <hr class="featurette-divider">
        </div>
        <div class="col-md-6">
          <div class="row featurette">
            <div class="col-md-5">
              <div class="date"><span class="day">25</span><span class="month">05</span></div><img class="featurette-image img-responsive center-block" data-src="holder.js/500x430/auto" alt="Generic placeholder image">
            </div>
            <div class="col-md-7">
              <h2 class="featurette-heading">First featurette heading.<span class="text-muted">It'll blow your mind.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              <a class="read-more" href="event-details.html">Ver detalhes<img src="<?php echo get_template_directory_uri() ?>/assets/img/long-arrow-right.svg"></a>
            </div>
          </div>
          <hr class="featurette-divider">
        </div>
      </div>
      <nav class="pull-right" aria-label="...">
        <ul class="pagination">
          <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
        </ul>
      </nav>
    </div>

<?php get_footer(); ?>
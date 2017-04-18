<?php
/*
 * Template Name: Contato
 */
?>

<?php get_header(); ?>

    <!-- Marketing messaging and featurettes
        ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container">
      <!-- START THE FEATURETTES-->
      <div class="row">
        <h1 class="title border-yellow">Contato</h1>
        <div class="col-md-12 text text-justify">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-md-6">
          <p><strong>Visite-nos:</strong></p>
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.3423217239061!2d-42.376474970795435!3d-21.137692799121208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbcc6149ace26a5%3A0xf021584a685efd8!2sR.+Camilo+Martins+da+Silva%2C+284%2C+Muria%C3%A9+-+MG%2C+36880-000!5e0!3m2!1spt-PT!2sbr!4v1492297673599" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
          </div>
          <p><strong>ou ligue:</strong><br>(32) 3232-4545</p>
          <p><strong>Siga-nos nas redes sociais</strong><br>
            <div class="contact-social-media">
            <a id="facebook-top" href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook.svg"></a>
            <a id="youtube-top" href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/youtube.svg"></a>
            </div>
          </p>
        </div>
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <label for="name">Nome</label>
              <input class="form-control" id="name" type="text" placeholder="Seu nome">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" id="email" type="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="phone_number">Telefone para contato</label>
              <input class="form-control" id="phone_number" type="tel" placeholder="Telefone ou Celular">
            </div>
            <div class="form-group">
              <label for="subject">Assunto</label>
              <input class="form-control" id="subject" type="text" placeholder="Assunto da Mensagem">
            </div>
            <div class="form-group">
              <label for="message">Mensagem</label>
              <textarea class="form-control" id="message"></textarea>
            </div>
            <button class="btn btn-primary pull-right" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /.container-->

<?php get_footer(); ?>
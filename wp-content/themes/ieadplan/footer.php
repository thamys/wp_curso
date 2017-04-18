<!-- Main jumbotron for verse of tha day-->
    <div class="jumbotron verse-of-the-day">
      <div class="container">
        <h1 class="title">Versículo do dia</h1>
        <h3>Portanto, vão e façam discípulos de todas as nações, batizando-os em nome do Pai e do Filho e do Espírito Santo,</h3>
        <p>Mateus 28:19</p>
      </div>
    </div>
    <?php
    if(!is_home()){
    ?>
    <div class="parallax">
      <div class="container-fluid">
        <div class="container">
          <div class="col-md-6 schedule-of-worship">
            <h3 class="title"><span class="border-yellow">Horários de Cultos</span></h3>
            <div class="two-colums">
              <div>
                <p><strong>Domingo:</strong><br> 09:00 - Escola Bíblica Dominical<br> 19:00 - Culto de Louvor e Adoração</p>
              </div>
              <div>
                <p><strong>Terças-Feiras:</strong><br> 19:30 - Culto de Estudo Bíblico</p>
              </div>
              <div>
                <p><strong>Quartas-Feiras:</strong><br> 19:30 - Culto de Oração</p>
              </div>
              <div>
                <p><strong>Quintas-Feiras:</strong><br> 19:00 - Culto de Louvor e Adoração</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 contact-info">
            <h3 class="title"><span class="border-yellow">Entre em Contato</span></h3>
            <div class="text-right">
              <p><strong>Endereço:</strong><br> Rua Florinda Marques, 25, Planalto, Muriaé - MG</p>
              <p><strong>Telefone:</strong><br> (32) 3232-4545</p>
              <p><strong>Redes Sociais</strong><br></p>
              <div class="footer-social-media"><a id="facebook-top" href="#"><img src="./assets/img/facebook.svg"></a> <a id="youtube-top" href="#"><img src="./assets/img/youtube.svg"></a></div>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
    <!-- FOOTER-->
    <footer class="site-footer">
      <p class="col-md-6">© 2016<strong>Thamys Guedes</strong>, Inc. ·<a href="#">Privacy</a> ·<a href="#">Terms</a></p>
      <p class="col-md-6 text-right"><a href="#">Back to top</a></p>
    </footer>
    <?php wp_footer() ?>
    <?php 
    /*
    <!--
    Bootstrap core JavaScript
    ==================================================
    -->
    <!-- Placed at the end of the document so the pages load faster-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line!-->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug-->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
     */
     ?>
  </body>
</html>

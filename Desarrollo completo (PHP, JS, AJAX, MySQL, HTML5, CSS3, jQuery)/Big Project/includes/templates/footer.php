<footer class="site-footer">
      <div class="contenedor clearfix">
        <div class="footer-informacion">
          <h3>Sobre <span>gdlwebcamp</span></h3>
          <p>Maecenas auctor non purus at molestie. Etiam tempor augue in dui pretium, vitae sagittis augue scelerisque. Nunc condimentum convallis bibendum. Ut eget convallis enim. Maecenas egestas at elit in condimentum. Nunc nisi ipsum, commodo et vestibulum at, vestibulum quis augue. Etiam molestie suscipit ipsum, in vulputate tortor lacinia vehicula. Aliquam volutpat tempus eros, pulvinar viverra est. In id nunc at lorem viverra convallis a nec lorem. Phasellus luctus sagittis gravida.</p>
        </div>

        <div class="ultimos-tweets">
          <h3>Ultimos <span>tweets</span></h3>

          <ul>
            <li>Donec consequat <span>aliquam nunc</span>, lobortis maximus augue ornare sed. Integer quis ultricies orci. Vivamus et imperdiet nisl, sit amet elementum orci.</li>

            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span>id mauris in risus viverra auctor</span>. Interdum et malesuada fames ac ante ipsum primis in faucibus.</li>

            <li>Mauris convallis mollis ligula in ornare. Nunc sed nulla volutpat, <span>eleifend dui vel</span>, fringilla dui. Aenean faucibus urna justo, vel euismod purus posuere et.</li>
          </ul>
        </div>

        <div class="menu">
          <h3>Redes <span>sociales</span></h3>

          <nav class="redes-sociales">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>

          </nav>
        </div>
      </div>

      <p class="copyright">
        Todos los derechos reservados GDLWEBCAMP 2018. &copy;
      </p>

                <!-- Begin Mailchimp Signup Form -->
          <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
          <style type="text/css">
            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
              We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
          </style>
          <div style="display:none;"> 
              <div id="mc_embed_signup">
              <form action="https://github.us7.list-manage.com/subscribe/post?u=7fa001e7c348a4b89f9225c1c&amp;id=1d1f954020" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll">
                <h2>Subscribete a nuestro Newsletter</h2>
              <div class="indicates-required"><span class="asterisk">*</span> Estos son obligatorios</div>
              <div class="mc-field-group">
                <label for="mce-EMAIL">Email  <span class="asterisk">*</span>
              </label>
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
              </div>
              <div class="mc-field-group">
                <label for="mce-FNAME">Nombre  <span class="asterisk">*</span>
              </label>
                <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
              </div>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7fa001e7c348a4b89f9225c1c_1d1f954020" tabindex="-1" value=""></div>
                  <div class="clear"><input type="submit" value="Subscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                  </div>
              </form>
              </div>
          </div>
          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
          <!--End mc_embed_signup-->


    </footer>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.waypoints.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/jquery.lettering.js"></script>

  <?php
    $archivo=basename($_SERVER['PHP_SELF']);
    $pagina=str_replace('.php','',$archivo);

    if($pagina == 'invitados' || $pagina == 'index'){
      echo '<script src="js/jquery.colorbox.js"></script>';
    }elseif($pagina == 'conferencia'){
      echo '<script src="js/lightbox.js"></script>';
    }
  ?>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us7.list-manage.com","uuid":"7fa001e7c348a4b89f9225c1c","lid":"1d1f954020","uniqueMethods":true}) })</script>
</body>

</html>

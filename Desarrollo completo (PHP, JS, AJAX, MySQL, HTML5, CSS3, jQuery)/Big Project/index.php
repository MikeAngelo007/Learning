<?php include_once'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
      <h2>La mejor conferencia de desarrollo web in spanish</h2>
      <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit sapien vitae nunc feugiat, in posuere nibh lobortis. Pellentesque pulvinar enim at mauris efficitur mollis. Nulla finibus velit sit amet erat molestie, eget facilisis tortor maximus. Donec vel auctor ligula. Praesent lorem massa, posuere ut semper maximus, interdum eu magna. Nam aliquam volutpat ex, non consectetur eros rutrum quis. Vivamus nisl lorem, fermentum eu rutrum sed, vehicula in mi. Morbi nibh dolor, sagittis viverra condimentum vel, vulputate quis tellus. Aliquam eu est et nunc lacinia finibus lobortis sed tellus. Fusce quis iaculis neque. Fusce tincidunt iaculis ex, a luctus mi vulputate sed. Sed nibh ante, dignissim ut erat non, cursus pretium nibh. Phasellus ultricies ultrices pharetra. Ut elementum, orci eget imperdiet aliquam, diam diam malesuada dui, ac hendrerit sem magna eu purus. Curabitur interdum velit in nibh euismod, ac auctor nunc tempus.
      </p>
    </section>


    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop muted poster="img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogg">
        </video>
      </div>

      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa del evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
              <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
              <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
            </nav>

            <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>HTML5, CSS3 y JavaScript</h3>
                <p><i class="far fa-clock"></i>16:00 hrs</p>
                <p><i class="fa fa-calendar"></i>22 de Dic</p>
                <p><i class="fa fa-user"></i>Juan de la Torre</p>
              </div>

              <div class="detalle-evento">
                <h3>Responsive Web Design</h3>
                <p><i class="far fa-clock"></i>20:00 hrs</p>
                <p><i class="fa fa-calendar"></i>22 de Dic</p>
                <p><i class="fa fa-user"></i>Juan de la Torre</p>
              </div>

              <a href="#" class="button float-right">Ver todos</a>
            </div>
            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>¿Como ser freelancer?</h3>
                <p><i class="far fa-clock"></i>10:00 hrs</p>
                <p><i class="fa fa-calendar"></i>21 de Dic</p>
                <p><i class="fa fa-user"></i>Gregorio Sanchez</p>
              </div>

              <div class="detalle-evento">
                <h3>Tecnologias del futuro</h3>
                <p><i class="far fa-clock"></i>15:30 hrs</p>
                <p><i class="fa fa-calendar"></i>22 de Dic</p>
                <p><i class="fa fa-user"></i>Susan Sanchez</p>
              </div>

              <a href="#" class="button float-right">Ver todos</a>
            </div>
            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Diseño UI/UX para moviles</h3>
                <p><i class="far fa-clock"></i>17:00 hrs</p>
                <p><i class="fa fa-calendar"></i>23 de Dic</p>
                <p><i class="fa fa-user"></i>Harold Garcia</p>
              </div>

              <div class="detalle-evento">
                <h3>Aprende a programar en una mañana</h3>
                <p><i class="far fa-clock"></i>16:00 hrs</p>
                <p><i class="fa fa-calendar"></i>22 de Dic</p>
                <p><i class="fa fa-user"></i>Susana Rivera</p>
              </div>

              <a href="#" class="button float-right">Ver todos</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="invitados contenedor seccion">
      <h2>Nuestros invitados</h2>
      <ul class="lista-invitados clearfix">
        <li>
          <div class="invitado">
            <img src="img/invitado1.jpg" alt="Invitado 1">
            <p>Rafael Bautista</p>
          </div>
        </li>
        <li>
          <div class="invitado">
              <img src="img/invitado2.jpg" alt="Invitado 1">
              <p>Shari Herrera</p>
            </div>
        </li>
        <li>
              <div class="invitado">
                <img src="img/invitado3.jpg" alt="Invitado 1">
                <p>Gregorio Sanchez</p>
              </div>
        </li>
        <li>
                <div class="invitado">
                  <img src="img/invitado4.jpg" alt="Invitado 1">
                  <p>Susana Rivera</p>
                </div>
        </li>
        <li>
                  <div class="invitado">
                    <img src="img/invitado5.jpg" alt="Invitado 1">
                    <p>Harold Garcia</p>
                  </div>
        </li>
        <li>
                    <div class="invitado">
                      <img src="img/invitado6.jpg" alt="Invitado 1">
                      <p>Susan Sanchez</p>
                    </div>
        </li>
                  
      </ul>
    </section>
    
    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero">0</p> Invitados</li>
          <li><p class="numero">0</p> Talleres</li>
          <li><p class="numero">0</p> Dias</li>
          <li><p class="numero">0</p> Conferencias</li>
        </ul>
      </div>
    </div>

    <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Pase por día</h3>
              <p class="numero">$30.000</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
          
          <li>
            <div class="tabla-precio">
              <h3>Todos los dias</h3>
              <p class="numero">$50.000</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button">Comprar</a>
            </div>
          </li>
          
          <li>
            <div class="tabla-precio">
              <h3>Pase por dos días</h3>
              <p class="numero">$45.000</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
        </ul>
      </div>
    </section>


    <div id="mapa" class="mapa">

    </div>


    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
          <blockquote>
            <p>Nulla a sem non mauris congue eleifend. Nam quis pulvinar nisl. Maecenas bibendum maximus massa ac convallis. Ut orci ligula, accumsan non finibus et, vehicula ac enim. Aenean sit amet ornare nibh, eget iaculis velit. Fusce mattis risus ut dui maximus condimentum sed nec diam. Quisque varius consectetur lacus eu bibendum. Nunc vel nibh sapien. Quisque lacinia malesuada ultricies. Morbi eu justo ante. Duis dapibus arcu a ante vehicula, sit amet facilisis nibh vestibulum. Nam at vulputate sapien. Nullam vitae consectetur risus, sed pharetra turpis. Sed volutpat non nisi in cursus. Fusce iaculis vestibulum purus, nec interdum mi.</p>

            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="Imagen testimonial">
              <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div>

        <div class="testimonial">
          <blockquote>
            <p>Nam pretium elit interdum elit pretium, et sollicitudin nibh ornare. Vivamus ultrices porta ex ac pellentesque. Suspendisse venenatis ut mauris id tempus. Nunc dapibus finibus sem. Nunc arcu libero, auctor gravida felis et, tempus molestie nisl. Proin pharetra malesuada nibh, eget condimentum purus porttitor eu. Mauris pharetra lectus sapien, sed fermentum arcu rutrum vitae.</p>

            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="Imagen testimonial">
              <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div>

        <div class="testimonial">
          <blockquote>
            <p>Phasellus blandit quam est, in gravida lacus dictum quis. Donec imperdiet condimentum dolor quis tempor. Cras laoreet dictum maximus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec hendrerit mi at libero pharetra, id congue lorem efficitur. Nunc auctor, velit eget dictum mattis, nisl nulla efficitur elit, efficitur ultrices purus nibh quis metus. Duis sed scelerisque ligula. Nam eu ante vitae nisi gravida ullamcorper.</p>

            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="Imagen testimonial">
              <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div>
      </div>
    </section>

    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Registrate al newsletter</p>
        <h3>gdlwebcamp</h3>
        <a href="#" class="button transparente">Registrate</a>
      </div>
    </div>

    <section class="seccion">
      <h2>Faltan</h2>

      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
          <li><p id="dias" class="numero"></p> Dias</li>
          <li><p id="horas" class="numero"></p> Horas</li>
          <li><p id="minutos" class="numero"></p> Minutos</li>
          <li><p id="segundos" class="numero"></p> Segundos</li>
        </ul>
      </div>
    </section>

    <?php include_once'includes/templates/footer.php'; ?>
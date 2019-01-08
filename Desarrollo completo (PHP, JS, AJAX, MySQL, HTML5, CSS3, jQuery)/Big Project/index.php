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

            <?php
                try{
                    require_once('includes/funciones/bd_conexion.php');
                    $sql = "SELECT * FROM `categoria_evento` ";
                    $resultado = $conn->query($sql);
                }catch(\Exception $e){
                    echo $e->getMesage();
                }

            ?>
            <nav class="menu-programa">
            <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){
              $categoria = $cat['cat_evento'];
              ?>
             <a href="#<?php echo strtolower($categoria)?>"><i class="fas <?php echo $cat['icono'];?>"></i><?php echo $categoria;?></a> 
            <?php } ?>
            </nav>

            <?php
              try {
                require_once ('includes/funciones/bd_conexion.php');
                $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";
                $sql .= "FROM `eventos` ";
                $sql .= "INNER JOIN `categoria_evento` ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN `invitados` ";
                $sql .= "ON eventos.id_inv = invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 1 ";
                $sql .= "ORDER BY `evento_id` LIMIT 2;";
                $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";
                $sql .= "FROM `eventos` ";
                $sql .= "INNER JOIN `categoria_evento` ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN `invitados` ";
                $sql .= "ON eventos.id_inv = invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 2 ";
                $sql .= "ORDER BY `evento_id` LIMIT 2;";
                $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";
                $sql .= "FROM `eventos` ";
                $sql .= "INNER JOIN `categoria_evento` ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN `invitados` ";
                $sql .= "ON eventos.id_inv = invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 3 ";
                $sql .= "ORDER BY `evento_id` LIMIT 2;";
              } catch (Exception $e) {
                echo $e -> getMessage();
              }
            ?>

            <?php $conn->multi_query($sql); ?>

            <?php do {
            $resultado = $conn->store_result(); ?>

            <?php $i = 0; ?>
            <?php while ( $evento = $resultado->fetch_assoc() ) { ?>
            <?php if($i % 2 == 0) { ?>
              <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
            <?php } ?>
              <div class="detalle-evento">
              <h3><?php echo utf8_encode($evento['nombre_evento']) ?></h3>
              <p><i class="far fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
              <p><i class="fas fa-calendar-alt"></i><?php echo $evento['fecha_evento']; ?></p>
              <p><i class="fas fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?></p>
              </div>
            <?php if($i % 2 == 1) : ?>
              <a href="calendario.php" class="button float-right">Ver todos</a>
              </div>
            <?php endif; ?>
            <?php $i++; ?>
            <?php } ?>
            <?php $resultado->free(); ?>
            <?php } while($conn->more_results() && $conn->next_result()); ?>

            
            
          </div>
        </div>
      </div>
    </section>

    <?php include_once'includes/templates/invitados.php'; ?>
    
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
              <a href="registro.php" class="button hollow">Comprar</a>
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
              <a href="registro.php" class="button">Comprar</a>
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
              <a href="registro.php" class="button hollow">Comprar</a>
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
        <a href="#mc_embed_signup" class="button transparente boton_newsletter">Registrate</a>
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
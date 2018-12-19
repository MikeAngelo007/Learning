<section class="seccion contenedor">
      <h2>La mejor conferencia de desarrollo web in spanish</h2>
      <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit sapien vitae nunc feugiat, in posuere nibh lobortis. Pellentesque pulvinar enim at mauris efficitur mollis. Nulla finibus velit sit amet erat molestie, eget facilisis tortor maximus. Donec vel auctor ligula. Praesent lorem massa, posuere ut semper maximus, interdum eu magna. Nam aliquam volutpat ex, non consectetur eros rutrum quis. Vivamus nisl lorem, fermentum eu rutrum sed, vehicula in mi. Morbi nibh dolor, sagittis viverra condimentum vel, vulputate quis tellus. Aliquam eu est et nunc lacinia finibus lobortis sed tellus. Fusce quis iaculis neque. Fusce tincidunt iaculis ex, a luctus mi vulputate sed. Sed nibh ante, dignissim ut erat non, cursus pretium nibh. Phasellus ultricies ultrices pharetra. Ut elementum, orci eget imperdiet aliquam, diam diam malesuada dui, ac hendrerit sem magna eu purus. Curabitur interdum velit in nibh euismod, ac auctor nunc tempus.
      </p>
    </section>


    

    <section class="seccion contenedor">
      <h2>Invitados</h2>

        <?php
            try{
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT * FROM `invitados` ";
                $resultado = $conn->query($sql);
            }catch(\Exception $e){
                echo $e->getMesage();
            }

        ?>

            <section class="invitados contenedor seccion">
            <ul class="lista-invitados clearfix">
            <?php 
            while($invitados = $resultado->fetch_assoc()){ ?>
            
                <li>
                    <div class="invitado">
                        <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id'];?>">
                            <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Invitado <?php echo $invitados['invitado_id'];?>">
                            <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></p>
                        </a>
                    </div>
                </li>

                <div style="display:none;">

                    <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id'];?>">
                        <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'];?></h2>
                        <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Invitado <?php echo $invitados['invitado_id'];?>">
                        <p><?php echo $invitados['descripcion'];?></p>
                    </div>
                
                </div>
                

            <?php }; ?>
            </ul>
            </section>
        

        <pre>
            <?php
                $conn->close();
            ?>
        </pre>

      
    </section>
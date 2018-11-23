<?php include_once'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
      <h2>La mejor conferencia de desarrollo web in spanish</h2>
      <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit sapien vitae nunc feugiat, in posuere nibh lobortis. Pellentesque pulvinar enim at mauris efficitur mollis. Nulla finibus velit sit amet erat molestie, eget facilisis tortor maximus. Donec vel auctor ligula. Praesent lorem massa, posuere ut semper maximus, interdum eu magna. Nam aliquam volutpat ex, non consectetur eros rutrum quis. Vivamus nisl lorem, fermentum eu rutrum sed, vehicula in mi. Morbi nibh dolor, sagittis viverra condimentum vel, vulputate quis tellus. Aliquam eu est et nunc lacinia finibus lobortis sed tellus. Fusce quis iaculis neque. Fusce tincidunt iaculis ex, a luctus mi vulputate sed. Sed nibh ante, dignissim ut erat non, cursus pretium nibh. Phasellus ultricies ultrices pharetra. Ut elementum, orci eget imperdiet aliquam, diam diam malesuada dui, ac hendrerit sem magna eu purus. Curabitur interdum velit in nibh euismod, ac auctor nunc tempus.
      </p>
    </section>


    

    <section class="seccion contenedor">
      <h2>Calendario de eventos</h2>

        <?php
            try{
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";
                $sql .= "FROM `eventos` ";
                $sql .= "INNER JOIN `categoria_evento` ";
                $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
                $sql .= "INNER JOIN `invitados` ";
                $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                $sql .= "ORDER BY `evento_id` ";
                $resultado = $conn->query($sql);
            }catch(\Exception $e){
                echo $e->getMesage();
            }

        ?>

        <div class="calendario">
            <?php 
            $calendario = array();
            while($eventos = $resultado->fetch_assoc()){
                $fecha = $eventos['fecha_evento'];
                $evento=array(
                    'titulo' => $eventos['nombre_evento'],
                    'fecha' => $eventos['fecha_evento'],
                    'hora' => $eventos['hora_evento'],
                    'categoria' => $eventos['cat_evento'],
                    'icono' => 'fas ' . $eventos['icono'],
                    'invitado' => $eventos['nombre_invitado'] . ' ' . $eventos['apellido_invitado']
                );

                $calendario[$fecha][] = $evento;
                
            };



            foreach($calendario as $dia => $lista_eventos){ ?>

                <h3 class="fecha-dia">
                    <i class="fa fa-calendar"></i>

                    <?php 
                    //Unix
                    //setlocale(LC_TIME,'es_ES.UTF-8');
                    //Windows
                    //setlocale(LC_TIME,'spanish');

                    echo date("F j, Y", strtotime($dia));
                    //echo strftime("%A, %d de %B deñ %Y", strtotime($dia));
                    ?>
                </h3>
                <div class="conjunto-dia">
                    <?php foreach($lista_eventos as $event){ ?>
                        <div class="dia">
                            <p class="titulo">
                            
                            <?php echo $event['titulo']; ?>
            
                            </p>
                            <p class="hora">
                            <i class="far fa-clock" aria-hidden="true"></i>
                                <?php echo $event['fecha'] . ' ' . $event['hora']; ?></p>
                            
                            <p class="categoria">
                                <i class="<?php echo $event['icono']; ?>" aria-hidden="true"></i>
                                <?php echo $event['categoria']; ?>
                            </p>

                            <p class="invitado">
                                <i class="fas fa-user" aria-hidden="true"></i>
                                <?php echo $event['invitado']; ?>
                            </p>
                        </div>
                    <?php } ?>

                </div>

            <?php }
           
            
            ?>
        </div>

        <pre>
            <?php
                $conn->close();
            ?>
        </pre>

      
    </section>

   <?php include_once'includes/templates/footer.php'; ?>

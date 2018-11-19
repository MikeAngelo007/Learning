<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>

        <div class="contenido">
            <?php
              $persona = array(
                'datos' => array(
                  'nombre' => 'Mike',
                  'gustos' => array(
                    'peliculas' => array(
                      'terror' => 'IT',
                      'Comedia' => 'La propuesta',
                      'Accion' => 'Infinity_war'
                    ),
                    'Musica' => array(
                      'pop' => 'Beat_it',
                      'ranchera' => 'Dulce_dolor (?',
                      'vallenato' => 'Justicia',
                      'Reggueton' => array('Bandolero',"Ella_y_yo",'X')
                    )
                  )

                ),
                'lenguajes' => array(
                    'Front_end' => array('CSS','JavaScript','HTML5','JQuery'),
                    'Back_end' => array('PHP','MySQL','Python')
                )
              );

            ?>

            <h2>Foreach arreglos multidimensionales</h2>

            <ul>
            <?php
                  foreach($persona['datos']['gustos']['peliculas'] as $dato){
            ?>

            <li><?php echo $dato ?></li>


            <?php } ?>


              <?php 
                foreach($persona as $leng){
                  if (array_key_exists('Front_end',$leng)){
                    ?>
                      <h2>Lenguajes frontend</h2>
                    
                    <?php  
                    foreach($leng['Front_end'] as $front){
                      ?>

                      <li><?php echo $front ?></li>

                      <?php   
                    }
                    
                  }

                  if (array_key_exists('Back_end',$leng)){
                    ?>
                      <h2>Lenguajes backend</h2>
                    
                    <?php  
                    foreach($leng['Back_end'] as $back){
                      ?>

                      <li><?php echo $back ?></li>

                      <?php   
                    }
                    
                  }
                }
              
              ?>
            
            </ul>
              
        </div>
    </div>




  </body>
</html>

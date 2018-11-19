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

            <pre>
              <?php
                // var_dump($persona);
                print_r($persona);
                print_r($persona['datos']['gustos']['Musica']['Reggueton'][1]);
              ?>
            </pre>
              
        </div>
    </div>




  </body>
</html>

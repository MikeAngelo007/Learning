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

              $lenguajes = array('CSS','HTML5','Python','PHP');
              $existe = in_array('HTML',$lenguajes);


            ?>
            <pre>
            <?php

            if ($existe == 1){
              echo 'Si existe </br>';
            }else{
              echo 'No existe </br>';
            }

            var_dump($existe);
              
            ?>
            
            </pre>



            <?php

                $persona = array(
                  'nombre' => 'Miguel',
                  'ciudad' => 'Bogota',
                  'profesion' => 'Desarrollador Web' 
                );

                $existe2 = in_array('Miguel', array_values($persona));


            ?>
            <pre>
              <?php

              if ($existe2 == 1){
              echo 'Si existe value </br>';
              }else{
              echo 'No existe value </br>';
              }

              var_dump($existe2);

              ?>

            </pre>




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

              $existe3 = in_array('Bandolero', array_values($persona['datos']['gustos']['Musica']['Reggueton']));


            ?>
            <pre>
              <?php

              if ($existe3 == 1){
              echo 'Si existe value Music </br>';
              }else{
              echo 'No existe value Music </br>';
              }
              print_r(array_values($persona));
              var_dump($existe3);

              ?>

            </pre>
        </div>
    </div>




  </body>
</html>

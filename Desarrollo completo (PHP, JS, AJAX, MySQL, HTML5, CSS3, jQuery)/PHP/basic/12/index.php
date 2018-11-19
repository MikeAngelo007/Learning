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
                'nombre' => 'Miguel',
                'ciudad' => 'Bogota',
                'profesion' => 'Desarrollador Web' 
              );

            ?>
            <pre>
              <?php

                print_r($persona);

                echo '<h1> El es de la ciudad de ', $persona['ciudad'], ' Y se dedica a ser ',$persona['profesion'],'</h1>';

                print_r(array_values($persona));
                print_r(array_keys($persona));
              ?>
            </pre>
              
        </div>
    </div>




  </body>
</html>

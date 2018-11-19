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

              $lenguajes = array('CSS','HTML5','Python','PHP','JavaScript');


            ?>

            <h2>Lenguajes que conozco</h2>
            <ul>
              <?php
                    foreach($lenguajes as $lenguaje){  ?>

                      <li> <?php echo $lenguaje ?> </li>
              <?php  } ?>
            
            </ul>
           



            <?php

                $persona = array(
                  'nombre' => 'Miguel',
                  'ciudad' => 'Bogota',
                  'profesion' => 'Desarrollador Web' 
                );


            ?>

            <h2>Datos personales</h2>
            <ul>
              <?php
                foreach($persona as $key => $val){

                  echo '<li>' . $key . ' : ' . $val .'</li>';
                }

              ?>
            
            </ul>
            
        </div>
    </div>




  </body>
</html>

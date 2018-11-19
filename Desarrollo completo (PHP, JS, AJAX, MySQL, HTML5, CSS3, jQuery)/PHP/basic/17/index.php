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
                for($i=0 ; $i < 100; $i++){
                  if ($i%5 == 0){
                  echo 'Cinco </br>';
                  continue;
                  }
                  echo $i . '</br>';
                }


                for($i=0 ; $i < 500; $i++){
                  if ($i%2 == 0){
                  echo 'Par </br>';
                  continue;
                  }
                  echo $i . ' Copas </br>';
                }



                $lenguajes = array('PHP','Python','JavaScript','HTML','CSS3');

                for($i = 0; $i < count($lenguajes); $i++){
                  echo $lenguajes[$i] . '</br>';

                }

            ?>
              
        </div>
    </div>




  </body>
</html>

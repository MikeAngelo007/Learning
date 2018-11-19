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
              $tecnologias = ['HTML', 'CSS', 'JavaScript', 'Angular'];
              echo $tecnologias[2];


              echo '<hr>';
              $lenguajes = array('HTML', 'CSS', 'JavaScript', 'Angular');
              echo $lenguajes[0];
              echo $lenguajes[1];
              echo $lenguajes[2];
              echo $lenguajes[3];

            ?>
              
        </div>
    </div>




  </body>
</html>

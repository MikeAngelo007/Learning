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
              $hola = 'Hola mundo';
              $numero = 20;
              echo $hola;
              echo $numero;

              // Las variables no pueden iniciar por numeros en el nombre, tampoco pueden tener un guion, toca usar guin bajo.

              $numeros99 = 99;
              echo $numeros99;

              $probando_text = 'Bum!';
              echo $probando_text;

              $saludos = '<h1>Que lindo!</h1>';
              echo $saludos;
            ?>
              
        </div>
    </div>




  </body>
</html>

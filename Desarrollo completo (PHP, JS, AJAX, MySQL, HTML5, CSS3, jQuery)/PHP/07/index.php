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

            $uno = 5;
            $dos = 5;

            if($uno < $dos){
              echo '1 es menor';
            }elseif($dos < $uno){
              echo '2 es menor';
            }else{
              echo '1 y 2 son iguales';
            }
          ?>
              
        </div>
    </div>




  </body>
</html>

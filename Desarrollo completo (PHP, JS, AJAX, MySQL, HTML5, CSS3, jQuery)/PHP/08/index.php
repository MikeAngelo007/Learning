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
            $lenguaje = 'bum';

            switch($lenguaje){
              case 'PHP':
                echo 'Backend';
                break;
              
              case 'JavaScript':
                echo 'Frontend';
                break;

              case 'React':
                echo 'Both';
                break;
              
              case 'Angular':
                echo 'El que aun no se usar';
                break;

              case 'CSS':
                echo 'Lo que lo hace bonito';
                break;

              default:
                echo 'Ni idea';
                break;
            }
          ?>
              
        </div>
    </div>




  </body>
</html>

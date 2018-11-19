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
            <h2>Agenda de contactos</h2>
            <?php
              function usuario($nombre="John Doe",$tel="0000000000"){
                  return $contacto = $nombre . ' ' . $tel;
              }

              $user = usuario('Mike Angelo',234589);
              echo $user;
              echo '<hr>';

              $user2 = usuario('Clara');
              echo $user2;
              echo '<hr>';

            ?>
              
        </div>
    </div>




  </body>
</html>

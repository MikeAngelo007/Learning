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
              $agenda = array();

              function guardarUsuario($nombre,$tel){
                global $agenda;
                $agenda[]= array($nombre,$tel);
              }

              function mostrarUsuario($id){
                global $agenda;
                $usuario = $agenda[$id];

                foreach($usuario as $us){
                  echo $us . '</br>';
                }
              }

              guardarUsuario('Mike',134567);
              guardarUsuario('Jane',793659);
              guardarUsuario('Grace',983763);

              echo '<pre>';
              mostrarUsuario(0);
              echo '</pre>';              

            ?>
              
        </div>
    </div>




  </body>
</html>

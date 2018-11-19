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
              function saludar(){
                echo 'Hola Amigos!' . '</br>';
              }

              saludar();

              function suma($a,$b){
                echo $a+$b . '</br>';
              }

              suma(20,31);

              $n=9;
              $m=10;

              suma($n,$m);
              ?>

              <h2>Agenda de contactos</h2>
              <?php
              function usuario(){
                  echo 'Mike Angelo' . '</br>';
                  echo '+57 1 1234567' . '</br>';
              }

              usuario();

            ?>
              
        </div>
    </div>




  </body>
</html>

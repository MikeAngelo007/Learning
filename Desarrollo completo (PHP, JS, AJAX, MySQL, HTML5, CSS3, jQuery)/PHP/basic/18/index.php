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
              $premier = array('No','se','cuales','equipos','poner','dime','tu','porque','yo','ño','she');
              //$premier=array();
              $i = 0;
              while($i < count($premier)){
                if (count($premier) > 0){
                  echo $premier[$i] . '</br>';

                  if($i+1 === count($premier)){
                    echo 'Fin </br>';
                  }
                }else{
                  echo 'Error 404: Results not found';
                }

                $i++;
              }
            ?>
              
        </div>
    </div>




  </body>
</html>

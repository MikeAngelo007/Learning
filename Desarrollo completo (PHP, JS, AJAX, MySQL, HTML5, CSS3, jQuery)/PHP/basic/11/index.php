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
              
            ?>

            <pre>

            <?php
              print_r($tecnologias);
            ?>
            </pre>  
            <?php
            //Agregar elemento
              $tecnologias[]='Python';
              $tecnologias[]='C++';
            ?>
            

            <pre>
            
            <?php
              print_r($tecnologias);
            ?>
            
            </pre> 

            <?php
            //Eliminar ultimo elemento
              $last = array_pop($tecnologias);
            ?>

            <h1><?php echo $last; ?></h1>

            <pre>
            
            <?php
              print_r($tecnologias);
            ?>
            
            </pre> 


            <?php
            //Eliminar primer (o cualquiera segun su posicion) elemento pero sin poder asiganarlo a variable
             unset($tecnologias[3]);
            ?>

            

            <pre>
            
            <?php
              print_r($tecnologias);
            ?>
            
            </pre> 


            <?php
            //Eliminar primer elemento
              $first = array_shift($tecnologias);
            ?>

            <h1><?php echo $first; ?></h1>

            <pre>
            
            <?php
              print_r($tecnologias);
            ?>
            
            </pre> 



            <?php
            //Remover ciertos elementos y agregar otros
              $array = array_splice($tecnologias,1,1,array('AnhularJS','GoGo'));
            ?>

           

            <pre>
            
            <?php
              print_r($array);
            ?>
            <?php
              print_r($tecnologias);
              array_splice($tecnologias,2,1);
              print_r($tecnologias);
            ?>
            
            </pre> 
              
        </div>
    </div>




  </body>
</html>

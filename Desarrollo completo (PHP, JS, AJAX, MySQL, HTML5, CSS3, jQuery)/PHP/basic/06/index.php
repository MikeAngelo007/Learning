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
                $calculo = 10 + 20;
                $calc = '10 + 20';
            ?>

            <h1>
                <?php echo $calc . ' = ' . $calculo . '</br>'; 
                      echo '15 + 10' . ' = ' . (15 + 10);
                ?>
            </h1>

            <hr>

            <h1><?php
              $numero1 = 10;
              $numero2 = 20;
              $numero3 = 30;
              $numero4 = 40;

              //suma

              echo $numero1 + $numero2;

              //resta

              echo '</br>' . ($numero4 - $numero3);

              //multiplicacion

              echo '</br>' . ($numero1 * $numero3);

              //division

              echo '</br>' . ($numero3 / $numero4);

              //parentesis

              echo '</br>' . (($numero3 / $numero4)+($numero1*$numero2))/(($numero2*$numero4)-($numero1/$numero3));

              //incremento en 1
              echo '<hr>';
              $numero1++;
              echo $numero1;

              //decremento en 1
              echo '<hr>';
              $numero2--;
              echo $numero2;

              //incremento en una variable
              echo '<hr>';
              $total=0;
              $total += 20;
              $total += 15;
              echo $total;

              //decremento en una variable
              echo '<hr>';
              $total=100;
              $total -= 20;
              $total -= 15;
              echo $total;

              echo '<hr>';
              echo 20 % 3;
              ?>
            </h1>
              
        </div>
    </div>




  </body>
</html>

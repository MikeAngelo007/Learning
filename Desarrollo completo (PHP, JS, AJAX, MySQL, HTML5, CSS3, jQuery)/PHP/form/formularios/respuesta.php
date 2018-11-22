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

        <?php $resultado = $_POST; ?>
        <?php $nombre =filter_var($resultado["nombre"],FILTER_SANITIZE_STRING);
              $apellido = filter_var($resultado["apellido"],FILTER_SANITIZE_STRING);
        ?>


        <?php 

        // Desde un input
            if(!(filter_has_var(INPUT_POST, 'nombre')&& (strlen(filter_input(INPUT_POST, 'nombre')) > 0)) ){
                echo 'Debes agregar un valor';
            }else{?>
            <p> Nombre: <?php echo $nombre; ?> </p>
            
            <?php    };
        ?>

        <?php if(!isset($apellido) || trim($apellido) != ''){ ?>
            <p> Apellido: <?php echo $apellido; ?> </p>

        <?php }else{

            echo "El apellido es obligatorio";
            
        }

        ?>
        
        <hr>

        <?php
        echo '<hr>';
        //Validar checkboxes (Uno solo)

        if(isset($_POST['notificaciones'])){
            $notificaciones = $_POST['notificaciones'];
            if($notificaciones == 'on'){
                echo 'Has aceptado recibir notificaciones </br>';
            }
        }

        echo '<hr>';
        //Validar array de checkboxes (Varios)

        //var_dump($_POST);

        if(isset($_POST['curso'])){
            $curso = $_POST['curso'];
            echo 'Tus cursos son: </br>';
            foreach($curso as $cur){
                echo $cur . '</br>';
            }
        }else{
            echo 'No elegiste ningun curso wey';
        }

        echo '<hr>';
        // Validar Select

        
        if(isset($_POST['area'])){
            $area = $_POST['area'];
            echo '<h2> Area de especialización: </h2>';

            switch($area){
                case 'fe':
                    echo 'Front End </br>';
                    break;
                case 'be':
                    echo 'Back End </br>';
                    break;
                case 'fs':
                    echo 'Full Stack </br>';
                    break;
                default:
                    echo 'No has elegido una especialidad. Elige una por favor. </br>';
                    break;
            }
        }

        echo '<hr>';
        //Validar radio
        echo '<h2> Tipo de clase: </h2>';
        if(isset($_POST['opciones'])){
            $opcion = $_POST['opciones'];
            

            switch($opcion){
                case 'pres':
                    echo 'Tomaras clases presenciales </br>';
                    break;
                case 'online':
                    echo 'Tomaras tus clases de modo virtual </br>';
                    break;
            }
        }else{
            echo 'No has elegido un tipo de clase. Elige uno por favor. </br>';
        }


        echo '<hr>';
        //Validar textarea

        if(isset($_POST['mensaje'])){
            //Modo normal e inseguro
            //$message = $_POST['mensaje'];

            //Modo seguro #1 (Estos modos evitaran que se inserte codigo malicioso por medio del mensaje)
            $message = filter_var($_POST['mensaje'],FILTER_SANITIZE_STRING);

            //Modo seguro #2
            //$message = htmlspecialchars($_POST['mensaje']);
            echo '<h2> Mensaje </h2>';
            if(strlen($message) > 0 && trim($message)){
                //echo '<h2> Mensaje </h2>';
                echo $message . '</br>';
            }else{
                echo 'Mensaje vacio.';
            }
        }
        ?>

        
        
        </pre>
        
        
        
    </div>




  </body>
</html>

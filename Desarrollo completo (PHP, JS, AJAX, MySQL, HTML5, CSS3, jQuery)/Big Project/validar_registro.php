<?php if (isset($_POST['submit'])):
        
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $regalo=$_POST['regalo'];

        $total=$_POST['total_pedido'];

        $fecha=date('Y-m-d H:i:s');

        //Pedidos
        $boletos=$_POST['boletos'];
        $camisas=$_POST['pedido_camisas'];
        $etiquetas=$_POST['pedido_etiquetas'];

        include_once'includes/funciones/funciones.php';

        $pedido = productos_json($boletos,$camisas,$etiquetas);
       

        //Eventos
        $eventos=$_POST['registro'];
        $registro=eventos_json($eventos);

        try{
            require_once('includes/funciones/bd_conexion.php');
            $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('Location:validar_registro.php?exitoso=1&nombre=' . $nombre .'&apellido=' . $apellido . '&email=' . $email . '&fecha=' . $fecha . '&pedido=' . $pedido . '&registro=' . $registro . '&regalo=' . $regalo . '&total=' . $total);
            //header('Location:validar_registro.php?exitoso=1&nombre=' . $nombre);
        }catch(\Exception $e){
            echo $e->getMesage();
        }
         endif;?>
<?php include_once'includes/templates/header.php'; ?>
<section class="seccion contenedor">
    <h2>Resumen de registro</h2>

    <?php 
        if(isset($_GET['exitoso'])):
            if($_GET['exitoso'] == 1){
                $nombre = $_GET['nombre'];
                $apellido = $_GET['apellido'];
                $email = $_GET['email'];
                $fecha = $_GET['fecha'];
                $pedido = json_decode($_GET['pedido']);
                $registro = json_decode($_GET['registro']);
                $regalo = $_GET['regalo'];
                $total = $_GET['total'];
                ?>
                <div class="info-registro-exitoso">
                    <h3 class="h3-registro">¡Registro exitoso!</h3>
                
                    <h5 class="h5-registro"> Nombre: <?php echo $nombre . ' ' . $apellido;  ?></h5>
                    <h5 class="h5-registro"> Email: <?php echo $email; ?></h5>
                    <h5 class="h5-registro"> Adquiriste:
                        <ul>
                        <?php foreach($pedido as $producto => $cantidad){?>
                            <li class="item-list-registro">
                            <?php 
                            
                            switch($producto){

                                case 'un_dia':
                                    echo  $cantidad . ' Pases por un día.';
                                    break;
                                case 'pase_completo':
                                    echo $cantidad . ' Pases completos.';
                                    break;
                                case 'pase_2dias':
                                    echo  $cantidad . ' Pases por dos dias.';
                                    break;
                                case 'camisas':
                                    echo $cantidad . ' camisas';
                                    break;
                                case 'etiquetas':
                                    echo $cantidad . ' Etiquetas';
                                    break;
                            }
                            
                            ?>
                            
                            </li>
                        <?php }
                        ?>
                        </ul>
                    </h5>
                    <h5 class="h5-registro"> Regalo: <?php 
                        switch($regalo){
                            case 1:
                                echo 'Pulsera';
                                break;
                            case 2:
                                echo 'Etiquetas';
                                break;
                            case 3;
                                echo 'Pluma';
                                break;

                        }
                    
                    ?></h5>

                    <h5 class="total-pagar-registro"> Total a pagar: $<?php echo $total; ?></h5>

                    <a href="registro.php" class="button">Realizar un nuevo registro</a>
                </div>
            <?php    
            }else {
                echo '<h3>¡Ups! Algo ha fallado. Intentalo de nuevo.</h3>';
            }
        endif;
    
    ?>
    
</section>

<?php include_once'includes/templates/footer.php'; ?>
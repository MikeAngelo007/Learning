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
            header('Location:validar_registro.php?exitoso=1');
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
                echo '<h3>Registro exitoso</h3>';
                echo '<a href="registro.php">Realizar un nuevo registro</a>';
            }else {
                echo '<h3>¡Ups! Algo ha fallado. Intentalo de nuevo.</h3>';
            }
        endif;
    
    ?>
    
</section>

<?php include_once'includes/templates/footer.php'; ?>
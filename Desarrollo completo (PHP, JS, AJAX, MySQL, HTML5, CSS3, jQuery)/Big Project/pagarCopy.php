<?php
if(!isset($_POST['submit'])){
    exit('Hubo un error');
}
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
require 'includes/paypal.php';

if (isset($_POST['submit'])):
        
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $genero=3;
    $genero=$_POST['genero'];
    $regalo=$_POST['regalo'];

    $total=$_POST['total_pedido'];

    $fecha=date('Y-m-d H:i:s');

    //Pedidos
    $boletos=$_POST['boletos'];
    $numeroBoletos=$boletos;
    $pedidoExtra=$_POST['pedido_extra'];
    $camisas=$_POST['pedido_extra']['camisas']['cantidad'];
    $precioCamisa= $_POST['pedido_extra']['camisas']['precio'];
    $etiquetas=$_POST['pedido_extra']['etiquetas']['cantidad'];
    $precioEtiqueta= $_POST['pedido_extra']['etiquetas']['precio'];

    include_once'includes/funciones/funciones.php';

    $pedido = productos_json($boletos,$camisas,$etiquetas);
   

    //Eventos
    $eventos=$_POST['registro'];
    $registro=eventos_json($eventos);

    


    try{
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, genero_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssissssis", $nombre, $apellido,$genero, $email, $fecha, $pedido, $registro, $regalo, $total);
        $stmt->execute();

        $ID_IN=$stmt->insert_id;
        $stmt->close();
        $conn->close();
        //header('Location:validar_registro.php?exitoso=1&nombre=' . $nombre .'&apellido=' . $apellido . '&email=' . $email . '&fecha=' . $fecha . '&pedido=' . $pedido . '&registro=' . $registro . '&regalo=' . $regalo . '&total=' . $total);
        //header('Location:validar_registro.php?exitoso=1&nombre=' . $nombre);
    }catch(\Exception $e){
        echo $e->getMesage();
    }




$compra = new Payer();
$compra->setPaymentMethod('paypal');




$i=0;
$arreglo_pedido=array();
foreach($numeroBoletos as $key => $value){
    if((int) $value['cantidad'] > 0){
        ${"articulo$i"}= new Item();
        $arreglo_pedido[]=${"articulo$i"};
        ${"articulo$i"}->setName('Pase:'.$key)
        ->setCurrency('USD')
        ->setQuantity((int) $value['cantidad'])
        ->setPrice((int) $value['precio']);
        $i++;
    }
}



foreach($pedidoExtra as $key => $value){
    if((int) $value['cantidad'] > 0){
        if($key == 'camisas'){
            $precio = (float) $value['precio'] * 0.93;
        }else{
            $precio = (float) $value['precio'];
        }
        
            ${"articulo$i"}= new Item();
            $arreglo_pedido[]=${"articulo$i"};
            ${"articulo$i"}->setName('Extras:'.$key)
            ->setCurrency('USD')
            ->setQuantity((int) $value['cantidad'])
            ->setPrice($precio);
            $i++;
        
    }
}


$listaArticulos = new ItemList();
$listaArticulos->setItems($arreglo_pedido);


/*
$detalles = new Details();
$detalles->setShipping($envio)
        ->setSubtotal($precio);
*/
$cantidad = new Amount();
$cantidad->setCurrency('USD')
        ->setTotal($total);

$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
            ->setItemList($listaArticulos)
            ->setDescription('Pago GDLWebCamp')
            ->setInvoiceNumber($ID_IN);

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/pago_finalizado.php?exito=true&id_pago={$ID_IN}")
            ->setCancelUrl(URL_SITIO . "/pago_finalizado.php?exito=false&id_pago={$ID_IN}");
 
$pago = new Payment();
$pago->setIntent("sale")
    ->setPayer($compra)
    ->setRedirectUrls($redireccionar)
    ->setTransactions(array($transaccion));


    try{
        $pago->create($apiContext);

    }catch(PayPal\Exception\PayPalConnectionException $pce){
        echo '<pre>';
        print_r(json_decode($pce->getData()));
        exit;
        echo '</pre>';
    }

$aprobado = $pago->getApprovalLink();
header("Location:{$aprobado}"); 


endif;
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
    $camisas=$_POST['pedido_extra']['camisas']['cantidad'];
    $precioCamisa= $_POST['pedido_extra']['camisas']['precio'];
    $etiquetas=$_POST['pedido_extra']['etiquetas']['cantidad'];
    $precioEtiqueta= $_POST['pedido_extra']['etiquetas']['precio'];

    include_once'includes/funciones/funciones.php';

    $pedido = productos_json($boletos,$camisas,$etiquetas);
   

    //Eventos
    $eventos=$_POST['registro'];
    $registro=eventos_json($eventos);

    echo '<pre>';
    var_dump($camisas);
    echo '</pre>';

    exit;
endif;

    try{
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, genero_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssissssis", $nombre, $apellido,$genero, $email, $fecha, $pedido, $registro, $regalo, $total);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header('Location:validar_registro.php?exitoso=1&nombre=' . $nombre .'&apellido=' . $apellido . '&email=' . $email . '&fecha=' . $fecha . '&pedido=' . $pedido . '&registro=' . $registro . '&regalo=' . $regalo . '&total=' . $total);
        //header('Location:validar_registro.php?exitoso=1&nombre=' . $nombre);
    }catch(\Exception $e){
        echo $e->getMesage();
    }
     //endif;
/*
$producto= htmlspecialchars($_POST['producto']);
$precio= htmlspecialchars($_POST['precio']);
$precio = (int) $precio;
$envio = 3;

$total=$precio+$envio;

$compra = new Payer();
$compra->setPaymentMethod('paypal');


$articulo= new Item();
$articulo->setName($producto)
->setCurrency('USD')
->setQuantity(1)
->setPrice($precio);

$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));

$detalles = new Details();
$detalles->setShipping($envio)
        ->setSubtotal($precio);

$cantidad = new Amount();
$cantidad->setCurrency('USD')
        ->setTotal($total)
        ->setDetails($detalles);

$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
            ->setItemList($listaArticulos)
            ->setDescription('Pago')
            ->setInvoiceNumber(uniqid());

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . '/pago_finalizado.php?exito=true')
            ->setCancelUrl(URL_SITIO . '/pago_finalizado.php?exito=false');

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
*/
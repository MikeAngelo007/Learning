<?php


$accion = $_POST['accion'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if($accion === 'crear'){
    //Codigo para crear
    //Hashear password

    $opciones=array(
        //Default y reocmendado para paginas web : 10
        'cost' => 12
    );

    $hash_password=password_hash($password,PASSWORD_BCRYPT,$opciones);


    include '../funciones/conexion.php';

    try{
        $stmt=$conn->prepare('INSERT INTO usuarios (usuario, password) VALUES (?,?)');
        $stmt->bind_param('ss',$usuario,$hash_password);
        $stmt->execute();

        if($stmt->affected_rows > -1){
            $respuesta=array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tipo' => $accion
            );
        }else{
            $respuesta=array(
                'respuesta' => 'incorrecto',
                'error' => $stmt->error_list,
                'tipo' => $accion
            );
        }

        $stmt->close();
        $conn->close();

    }catch (Exception $e){
        $respuesta = array(
            'pass' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);

    

    
}
if($accion === 'login'){
    //Codigo para loguear
}
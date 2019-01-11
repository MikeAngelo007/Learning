<?php
$accion = $_POST['accion'];
$proyecto = $_POST['proyecto'];
if($accion === 'crear'){
    //Codigo para crear


    include '../funciones/conexion.php';

    try{
        $stmt=$conn->prepare('INSERT INTO proyectos (nombre) VALUES (?)');
        $stmt->bind_param('s',$proyecto);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            $respuesta=array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'nombre_proyecto' => $proyecto,
                'tipo' => $accion
            );
        }else{
            $respuesta=array(
                'respuesta' => 'incorrecto',
                'error' => $stmt->error_list,
                'tipo' => $accion,
                'nombre_proyecto' => $proyecto
            );
        }

        $stmt->close();
        $conn->close();

    }catch (Exception $e){
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);

    

    
}

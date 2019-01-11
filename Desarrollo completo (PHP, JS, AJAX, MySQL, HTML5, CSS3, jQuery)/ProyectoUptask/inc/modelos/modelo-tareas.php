<?php
$accion = $_POST['accion'];
$id_proyecto = (int) $_POST['id_proyecto'];
$tarea = $_POST['tarea'];
if($accion === 'crear'){
    //Codigo para crear


    include '../funciones/conexion.php';

    try{
        $stmt=$conn->prepare('INSERT INTO tareas (nombre, id_proyecto) VALUES (?,?)');
        $stmt->bind_param('si',$tarea, $id_proyecto);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            $respuesta=array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tarea' => $tarea,
                'tipo' => $accion
            );
        }else{
            $respuesta=array(
                'respuesta' => 'incorrecto',
                'error' => $stmt->error_list,
                'tipo' => $accion,
                'tarea' => $tarea
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

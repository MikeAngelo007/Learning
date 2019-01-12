<?php
$accion = $_POST['accion'];
if(isset($_POST['id_proyecto'])){
    $id_proyecto = (int) $_POST['id_proyecto'];
}
if(isset($_POST['tarea'])){
    $tarea = $_POST['tarea'];
}
if(isset($_POST['id_tarea'])){
    $id_tarea=$_POST['id_tarea'];
}
if(isset($_POST['estado'])){
    $estado=$_POST['estado'];
}
if(isset($_POST['texto'])){
    $texto=$_POST['texto'];
}

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

if($accion === 'actualizar'){
    include '../funciones/conexion.php';

    try{
        $stmt=$conn->prepare('UPDATE tareas set estado = ? WHERE id = ?');
        $stmt->bind_param('ii',$estado, $id_tarea);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            $respuesta=array(
                'respuesta' => 'correcto',
                'estado' => $estado,
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

if($accion === 'eliminar'){
    include '../funciones/conexion.php';

    try{
        $stmt=$conn->prepare('DELETE FROM tareas WHERE id = ?');
        $stmt->bind_param('i', $id_tarea);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            $respuesta=array(
                'respuesta' => 'correcto',
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
if($accion === 'actualizar-total'){
    include '../funciones/conexion.php';

    try{
        $stmt=$conn->prepare('UPDATE tareas set nombre = ? WHERE id = ?');
        $stmt->bind_param('si',$texto, $id_tarea);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            $respuesta=array(
                'respuesta' => 'correcto',
                'texto' => $texto,
                'estado' => $estado,
                'id_tarea' => $id_tarea,
                'tipo' => $accion
            );
        }else{
            $respuesta=array(
                'respuesta' => 'incorrecto',
                'error' => $stmt->error_list,
                'tipo' => $accion,
                'tarea' => $texto,
                'id' => $id_tarea
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

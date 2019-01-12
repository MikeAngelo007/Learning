<?php
$accion = $_POST['accion'];
if(isset($_POST['proyecto'])){
    $source = $_POST['proyecto'];
    $proyecto = preg_replace ('/[ ]+/', ' ', $source);
}

if(isset($_POST['id_proyecto'])){
    $id_proyecto = $_POST['id_proyecto'];
}

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

if($accion === 'editar'){
    include '../funciones/conexion.php';

    try{
        $stmt=$conn->prepare('UPDATE proyectos set nombre = ? WHERE id = ?');
        $stmt->bind_param('si',$proyecto, $id_proyecto);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            $respuesta=array(
                'respuesta' => 'correcto',
                'proyecto' => $proyecto,
                'id_proyecto' => $id_proyecto,
                'tipo' => $accion
            );
        }else{
            $respuesta=array(
                'respuesta' => 'incorrecto',
                'error' => $stmt->error_list,
                'tipo' => $accion,
                'proyecto' => $proyecto
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

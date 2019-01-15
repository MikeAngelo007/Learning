<?php 
include 'inc/funciones/sesiones.php';
include 'inc/funciones/funciones.php';
include 'inc/funciones/conexion.php';
include 'inc/templates/header.php'; 
include 'inc/templates/barra.php'; 

if(isset($_GET['id_proyecto'])){
    $id_proyecto = $_GET['id_proyecto'];
}
?>


<input type="hidden" id="usuario_owner" value="<?php echo $_SESSION['nombre']; ?>">
<div class="contenedor">
    <?php include 'inc/templates/sidebar.php'; ?>

    <main class="contenido-principal">
    <?php 
    if(isset($_GET['id_proyecto'])){
        $proyecto = obtenerNombreProyecto($id_proyecto);

        
    }
    if(isset($_GET['id_proyecto'])){
    if(gettype($proyecto) === 'object'){?>
        <div class="titul">
            <h1 class="title">
                <?php  
                    foreach($proyecto as $nombre){ ?>
                        <span><?php echo $nombre['nombre']; 
                        if($nombre['usuario'] != $_SESSION['nombre']){
                            header('Location:index.php');
                            
                        }
                        ?></span>
                        

                <?php   } ?>
                
            </h1>
        </div>
        <div class="acciones-proyecto">
            <i class="fas fa-edit" id="edit-proyect"></i>
            <i class="fas fa-trash" id="elim-proyect"></i>
        </div>

        <form action="#" class="agregar-tarea">
            <div class="campo">
                <label for="tarea">Tarea:</label>
                <input type="text" placeholder="Nombre Tarea" class="nombre-tarea"> 
            </div>
            <div class="campo enviar">
                <input type="hidden" id="id_proyecto" value="<?php echo $id_proyecto; ?>">
                <input type="submit" class="boton nueva-tarea" value="Agregar">
            </div>
        </form>

    <?php }else{
        echo '<h1>Elije un proyecto a la izquierda.</h1>';
    } }?>
        
 

        <h2>Listado de tareas pendientes:</h2>

        <div class="listado-pendientes pendientes">
            <ul>
                <?php 
                    if(isset($id_proyecto)){
                        $tareas = obtenerTareasProyecto($id_proyecto); 
                    }
                    if(isset($tareas)){
                        if(gettype($tareas) === 'object'){
                            if($tareas->num_rows > 0){
                                $pend=0;
                                foreach($tareas as $tarea){ 
                                    if ((int)$tarea['estado'] === 0){
                                        $pend=$pend+1;?>
                                        <li id="tarea:<?php echo $tarea['id'] ?>" class="tarea pendiente">
                                        <p><?php echo $tarea['nombre']; ?></p>
                                        <div class="acciones">
                                            <i class="far fa-check-circle"></i>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </li> 

                            <?php   }
                                }

                                if($pend == 0){
                                    echo '<p class="lista-vacia">No hay tareas pendientes en este proyecto.</p>';
                                }

                            }else{
                                echo '<p class="lista-vacia">No hay tareas en este proyecto.</p>';
                            }
                        }else{
                            echo '<p>Elige un proyecto.</p>';
                        }
                    }else{
                        echo '<p>Elige un proyecto.</p>';
                    }
                ?>
                 
            </ul>
        </div>

        <h2>Listado de tareas completadas:</h2>

        <div class="listado-pendientes completos">
            <ul>
                <?php 
                    if(isset($id_proyecto)){
                        $tareas = obtenerTareasProyecto($id_proyecto); 
                    }
                    if(isset($tareas)){
                        if(gettype($tareas) === 'object'){
                            if($tareas->num_rows > 0){
                                $comp=0;
                                foreach($tareas as $tarea){ 
                                    if ((int)$tarea['estado'] === 1){
                                        $comp= $comp+1;?>
                                        <li id="tarea:<?php echo $tarea['id'] ?>" class="tarea completada">
                                        <p class="completo"><?php echo $tarea['nombre']; ?></p>
                                        <div class="acciones">
                                            <i class="far fa-check-circle completo"></i>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </li> 

                            <?php   }
                                }

                                if($comp == 0){
                                    echo '<p class="lista-vacia">No hay tareas completadas en este proyecto.</p>';
                                }

                            }else{
                                echo '<p class="lista-vacia">No hay tareas en este proyecto.</p>';
                            }
                        }else{
                            echo '<p>Elige un proyecto.</p>';
                        }
                    }else{
                        echo '<p>Elige un proyecto.</p>';
                    }
                ?>
                
            </ul>
        </div>
    </main>
</div><!--.contenedor-->


<?php 
include 'inc/templates/footer.php'; 
?>
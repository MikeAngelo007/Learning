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
        
 

        <h2>Listado de tareas:</h2>

        <div class="listado-pendientes">
            <ul>
                <?php 
                    if(isset($id_proyecto)){
                        $tareas = obtenerTareasProyecto($id_proyecto); 
                    }
                    if(isset($tareas)){
                        if(gettype($tareas) === 'object'){
                            if($tareas->num_rows > 0){
                                foreach($tareas as $tarea){ ?>
                                    <li id="tarea:<?php echo $tarea['id'] ?>" class="tarea">
                                        <p class="<?php if ((int)$tarea['estado'] === 1){ echo 'completo';}; ?>"><?php echo $tarea['nombre']; ?></p>
                                        <div class="acciones">
                                            <i class="far fa-check-circle <?php if ((int)$tarea['estado'] === 1){ echo 'completo';}; ?>"></i>
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash"></i>
                                        </div>
                                    </li> 

                            <?php   }

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
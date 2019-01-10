<?php 
include 'inc/funciones/funciones.php';
include 'inc/templates/header.php'; 
session_start();
if(isset($_SESSION['nombre'])){
    header('Location:index.php');
    exit();
}
?>


    <div class="contenedor-formulario">
        <h1>UpTask <span>Crear Cuenta</span></h1>
        <?php 
            include 'inc/templates/formulario.php'; 
        ?>
    </div>
<?php 
include 'inc/templates/footer.php'; 
?>
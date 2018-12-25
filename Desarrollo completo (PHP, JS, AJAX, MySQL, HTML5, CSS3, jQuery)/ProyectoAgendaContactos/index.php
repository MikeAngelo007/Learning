<?php include 'inc/funciones/funciones.php';?>
<?php include 'inc/layout/header.php';?>

<div class="contenedor-barra">
    <h1>Agenda de contactos</h1>

</div>

<div class="bg-amarillo contenedor sombra">
    <form action="#" id="contacto">
        <legend>Añadir un nuevo contacto: <span>Todos los campos son obligatorios.</span></legend>

        <?php include 'inc/layout/formulario.php';?>
    </form>

</div>

<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor-contactos">
        <h2>Contactos</h2>
        <input type="text" placeholder="Buscar contactos..." id="buscar" class="buscador sombra">

        <?php $contactos = obtenerContactos(); ?>

        <p class="total-contactos"><span><?php echo $contactos->num_rows; ?></span> Contactos</p>
        <div class="contenedor-tabla">
            <table id="listado-contactos" class="listado-contactos">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                    <?php    if($contactos->num_rows) {
                            //var_dump(count($contactos)); 
                            foreach($contactos as $contacto){
                    ?>
                        <tr>
                            <td><?php echo $contacto['nombre']; ?></td>
                            <td><?php echo $contacto['empresa']; ?></td>
                            <td><?php echo $contacto['telefono']; ?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $contacto['id']; ?>" class="btn-editar btn">
                                    <i class="far fa-edit"></i>
                                </a>

                                
                                <button type="button" class="btn-borrar btn" data-id="<?php echo $contacto['id']; ?>">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>

                    <?php   } 
                        } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'inc/layout/footer.php';?>
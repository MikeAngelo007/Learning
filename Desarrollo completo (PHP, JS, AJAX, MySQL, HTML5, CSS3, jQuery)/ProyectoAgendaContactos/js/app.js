const formularoContactos=document.querySelector('#contacto'),
        listadoContactos=document.querySelector('#listado-contactos tbody');

eventListeners();

function eventListeners(){
    //Cuando el formulario de editar o crear se ejecuta
    formularoContactos.addEventListener('submit',leerFormulario);

    //Listener para boton eliminar
    listadoContactos.addEventListener('click', eliminarContacto);
}

function leerFormulario(e){
    e.preventDefault();
    
    //Leer inputs
    const nombre=document.querySelector('#nombre').value,
            empresa=document.querySelector('#empresa').value,
            telefono=document.querySelector('#telefono').value,
            accion=document.querySelector('#accion').value;
    if(nombre === '' || empresa === '' || telefono === ''){
        //2 parametros: Texto y clase
        mostrarNotificacion('Todos los campos son obligatorios','error');
        //mostrarNotificacion('Contacto creado correctamente','exito');
    }else{
        //console.log('Se acepto todo.')
        const infoContacto = new FormData();
        infoContacto.append('nombre', nombre);
        infoContacto.append('empresa', empresa);
        infoContacto.append('telefono', telefono);
        infoContacto.append('accion', accion);

        //console.log(...infoContacto);
        if(accion === 'crear'){
            //crear contacto
            insertarBD(infoContacto);
        }else{
            //editar contacto
        }
    }
}
/* Inserta en la base de datos por AJAX */
function insertarBD(datos){
    //llamado a ajax

    //Crear el objeto
    const xhr = new XMLHttpRequest();

    //Crear la conexion
    xhr.open('POST','inc/modelos/modelo-contactos.php',true);

    //Pasar los datos
    xhr.onload = function(){
        if(this.status === 200){
            //console.log(JSON.parse(xhr.responseText));

            const respuesta = JSON.parse(xhr.responseText);
            //console.log(respuesta.empresa);

            //Inserta datos a la tabla
            const nuevoContacto= document.createElement('tr');
            nuevoContacto.innerHTML=`
                <td>${respuesta.datos.nombre}</td>
                <td>${respuesta.datos.empresa}</td>
                <td>${respuesta.datos.telefono}</td>
            
            `;
            const contenedorAcciones = document.createElement('td');
            //Creando accion Editar
            const iconoEditar = document.createElement('i');
            iconoEditar.classList.add('far','fa-edit')

            const btnEditar = document.createElement('a');
            btnEditar.appendChild(iconoEditar);
            btnEditar.href=`editar.php?id=${respuesta.datos.id_insertado}`;
            btnEditar.classList.add('btn','btn-editar');

            //Creando icono eliminar
            const iconoEliminar = document.createElement('i');
            iconoEliminar.classList.add('far','fa-trash-alt')
            const btnEliminar = document.createElement('button');
            btnEliminar.appendChild(iconoEliminar);
            btnEliminar.setAttribute('data-id', respuesta.datos.id_insertado);
            btnEliminar.classList.add('btn-borrar','btn')

            //Agregamos en padre
            contenedorAcciones.appendChild(btnEditar);
            contenedorAcciones.appendChild(btnEliminar);

            nuevoContacto.appendChild(contenedorAcciones);

            listadoContactos.appendChild(nuevoContacto);

            //Resetear formulario

            document.querySelector('form').reset();


            //Mostrar notificacion
            mostrarNotificacion('Contacto creado correctamente','correcto');

        }
    }

    //Enviar los datos
    xhr.send(datos);

}

//Eliminar contacto
function eliminarContacto(e){
    if(e.target.parentElement.classList.contains('btn-borrar')){
        const id= e.target.parentElement.getAttribute('data-id');
        
        const respuesta = confirm('¿Estas segura/o?');

        if(respuesta){

            //Llamado a Ajax
            const xhr = new XMLHttpRequest();
            xhr.open('GET',`inc/modelos/modelo-contactos.php?id=${id}&accion=borrar`,true);

            xhr.onload = function(){
                if(this.status === 200){
                    const resultado = JSON.parse(xhr.responseText);
                    
                    if(resultado.respuesta == 'correcto'){
                        //Eliminar el registro del DOM
                        e.target.parentElement.parentElement.parentElement.remove();


                        mostrarNotificacion('Contacto eliminado','correcto');
                    }else{
                        mostrarNotificacion('Hubo un error...','error');
                    }
                }
            }

            xhr.send();

        }
    }
}

function mostrarNotificacion(mensaje,clase){
    const notificacion=document.createElement('div');
    notificacion.classList.add(clase,'notificacion','sombra');
    notificacion.textContent=mensaje;


    formularoContactos.insertBefore(notificacion,document.querySelector('form legend'));

    //Mostrar y ocultar la notificacion
    setTimeout(() => {
        notificacion.classList.add('visible');

        setTimeout(() => {
            notificacion.classList.remove('visible');
            setTimeout(() => {
                notificacion.remove();
            }, 500);
        }, 3000);

    }, 100);
}
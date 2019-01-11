eventListeners();
const listaProyectos = document.querySelector('ul#proyectos');
function eventListeners(){
    document.querySelector('.crear-proyecto a').addEventListener('click', nuevoProyecto);
    if(document.querySelector('.nueva-tarea')){
        document.querySelector('.nueva-tarea').addEventListener('click',agregarTarea);
    }
    if(document.querySelector('.listado-pendientes')){
        document.querySelector('.listado-pendientes').addEventListener('click',accionesTareas);
    }
}

function nuevoProyecto(e){
    e.preventDefault();
    const nuevoProyecto = document.createElement('li');
    nuevoProyecto.innerHTML='<input type="text" id="nuevo-proyecto">'
    listaProyectos.appendChild(nuevoProyecto);

    const inputNuevoProyecto = document.querySelector('#nuevo-proyecto');
    inputNuevoProyecto.addEventListener('keypress', function(e){
        var tecla = e.which || e.keyCode;
        if(tecla === 13){
            if(inputNuevoProyecto.value != ''){
                guardarProyectoDB(inputNuevoProyecto.value);
            }else{
                Swal({
                    type: 'error',
                    title: 'Lo sentimos...',
                    text: 'El proyecto debe tener un nombre.'
                  })
            }
                listaProyectos.removeChild(nuevoProyecto);
            
        }
    });
}

function guardarProyectoDB(nombreProyecto){
    const datos = new FormData();
    datos.append('proyecto',nombreProyecto);
    datos.append('accion','crear');
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'inc/modelos/modelo-proyecto.php',true);

    xhr.onload = function(){
        if(this.status === 200){
            const respuesta = JSON.parse(xhr.responseText);
            if(respuesta.respuesta === 'correcto'){
                const proyecto = respuesta.nombre_proyecto,
                    id_proyecto = respuesta.id_insertado,
                    tipo = respuesta.tipo;
                if(tipo === 'crear'){
                    const nuevoProyecto = document.createElement('li');
                    nuevoProyecto.innerHTML=`
                        <a href="index.php?id_proyecto=${id_proyecto}" id="proyecto:${id_proyecto}">
                            ${proyecto}
                        </a>
                    `;
                    listaProyectos.appendChild(nuevoProyecto);

                    Swal({
                        type: 'success',
                        title: '¡Listo!',
                        text: 'El proyecto '+ proyecto +' se añadio satisfactoriamente.'
                      }).then(resultado =>{
                        if(resultado.value){
                            window.location.href='index.php?id_proyecto=' + id_proyecto;
                        }  
                        
                      })
                      
                }
            }else{
                console.log(respuesta.error);
                Swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Algo salio mal.'
                  })
            }
        }
    }
    xhr.send(datos);

    /* const nuevoProyecto = document.createElement('li');
    nuevoProyecto.innerHTML=`
        <a href="#">
            ${nombreProyecto}
        </a>
    `;
    listaProyectos.appendChild(nuevoProyecto); */
}

function agregarTarea(e){
    e.preventDefault();
    const nombreTarea = document.querySelector('.nombre-tarea').value;
    if(nombreTarea === ''){
        Swal({
            type: 'error',
            title: 'Oye...',
            text: 'Debes colocarte tareas para cumplir el proyecto. ¡A por ello!'
          })
    }else{

        const datos = new FormData();
        datos.append('tarea', nombreTarea);
        datos.append('accion','crear');
        datos.append('id_proyecto',document.querySelector('#id_proyecto').value);


        const xhr = new XMLHttpRequest();
        xhr.open('POST','inc/modelos/modelo-tareas.php',true);
        xhr.onload=function(){
            if(this.status === 200){
                const respuesta=JSON.parse(xhr.responseText);
                const resultado = respuesta.respuesta;

                if(resultado === 'correcto'){
                    const tarea = respuesta.tarea,
                        id_insertado = respuesta.id_insertado,
                        tipo = respuesta.tipo;

                        if(tipo === 'crear'){
                            Swal({
                                type: 'success',
                                title: '¡Bien!',
                                text: 'De tarea en tarea se va llegando al objetivo.'
                            })

                            document.querySelector('.agregar-tarea').reset();

                            
                            const listaVacia=document.querySelectorAll('.lista-vacia');
                            if(listaVacia.length > 0){
                                document.querySelector('.lista-vacia').remove();
                            }
                           

                            const nuevaTarea = document.createElement('li');
                            nuevaTarea.id='tarea:'+id_insertado;
                            nuevaTarea.classList.add('tarea');
                            nuevaTarea.innerHTML=`
                                <p>${tarea}</p>
                                <div class='acciones'>
                                    <i class="far fa-check-circle"></i>
                                    <i class="fas fa-trash"></i>
                                </div>
                            `;

                            const listado = document.querySelector('.listado-pendientes ul');
                            listado.appendChild(nuevaTarea);
                        }
                }else{
                    Swal({
                        type: 'error',
                        title: 'Lo sentimos...',
                        text: 'Algo salio mal. Try again.'
                      })
                }
            }
        }
        xhr.send(datos);


        /* Swal({
            type: 'success',
            title: '¡Bien!',
            text: 'De tarea en tarea se va llegando al objetivo.'
          }) */
    }
}

function accionesTareas(e){
    e.preventDefault();
    if(e.target.classList.contains('fa-check-circle')){
        if(e.target.classList.contains('completo')){
            cambiarEstadoTarea(e.target,0);
            e.target.classList.remove('completo');
            
        }else{
            cambiarEstadoTarea(e.target,1);
            e.target.classList.add('completo');
            
        }
    }
    if(e.target.classList.contains('fa-trash')){
        console.log('click en eliminar');
        Swal({
            title: 'Seguro segurito?',
            text: "Una vez eliminada, no hay reversa!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Seh, hagamoslo!',
            cancelButtonText: 'Nel, perame reviso'
          }).then((result) => {
            if (result.value) {
                const eliminarTarea = e.target.parentElement.parentElement;
                eliminarTareaBD(eliminarTarea);
                eliminarTarea.remove();
              
            }
          })
    }
    
}

function cambiarEstadoTarea(tarea,estado){
    const idTarea = tarea.parentElement.parentElement.id.split(':'); 

    const datos = new FormData();
    datos.append('id_tarea',idTarea[1]);
    datos.append('accion', 'actualizar');
    datos.append('estado',estado);

    var xhr = new XMLHttpRequest();
    xhr.open('POST','inc/modelos/modelo-tareas.php',true);
    xhr.onload = function(){
        if(this.status === 200){
            console.log(JSON.parse(xhr.responseText));
        }
    }
    xhr.send(datos);

}
function eliminarTareaBD(tarea){
    const idTarea = tarea.id.split(':'); 

    const datos = new FormData();
    datos.append('id_tarea',idTarea[1]);
    datos.append('accion', 'eliminar');

    var xhr = new XMLHttpRequest();
    xhr.open('POST','inc/modelos/modelo-tareas.php',true);
    xhr.onload = function(){
        if(this.status === 200){
            const respuesta = JSON.parse(xhr.responseText);
            if(respuesta.respuesta === 'correcto'){
                Swal(
                    'Bien, eliminada!',
                    'Felicitaciones por completar una tarea mas :3 .',
                    'success'
                  )

                const tareasRestantes = document.querySelectorAll('li.tarea');
                if(tareasRestantes.length < 1){
                    document.querySelector('.listado-pendientes ul').innerHTML= '<p class="lista-vacia">No hay tareas en este proyecto.</p>';
                }
            }else{
                Swal({
                    title: 'WhaaaaaT?',
                    text: "Algo fallo... Try again",
                    type: 'error'
                  })
            }
        }
    }
    xhr.send(datos);
}
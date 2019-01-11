eventListeners();
const listaProyectos = document.querySelector('ul#proyectos');
function eventListeners(){
    document.querySelector('.crear-proyecto a').addEventListener('click', nuevoProyecto);
    if(document.querySelector('.nueva-tarea')){
        document.querySelector('.nueva-tarea').addEventListener('click',agregarTarea);
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
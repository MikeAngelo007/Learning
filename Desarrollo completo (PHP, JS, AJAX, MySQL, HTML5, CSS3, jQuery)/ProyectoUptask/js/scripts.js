eventListeners();
const listaProyectos = document.querySelector('ul#proyectos');
function eventListeners(){
    document.querySelector('.crear-proyecto a').addEventListener('click', nuevoProyecto);
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
            guardarProyectoDB(inputNuevoProyecto.value);
            listaProyectos.removeChild(nuevoProyecto);
        }
    });
}

function guardarProyectoDB(nombreProyecto){
    const nuevoProyecto = document.createElement('li');
    nuevoProyecto.innerHTML=`
        <a href="#">
            ${nombreProyecto}
        </a>
    `;
    listaProyectos.appendChild(nuevoProyecto);
}
const formularoContactos=document.querySelector('#contacto');

eventListeners();

function eventListeners(){
    //Cuando el formulario de editar o crear se ejecuta
    formularoContactos.addEventListener('submit',leerFormulario);
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
        console.log('Se acepto todo.')
        //const infoContacto = new FormData();
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
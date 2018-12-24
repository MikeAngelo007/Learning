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
            telefono=document.querySelector('#telefono').value;
    if(nombre === '' || empresa === '' || telefono === ''){
        console.log('Los campos estan vacios');
    }else{
        console.log('No lo estan.');
    }
}
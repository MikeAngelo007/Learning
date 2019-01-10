eventListeners();
function eventListeners(){
    const form= document.querySelector('#formulario');
    if(form){
        form.addEventListener('submit',validarRegistro);
    }
}
function validarRegistro(e){
    e.preventDefault();

    const usuario= document.querySelector('#usuario').value, 
        password= document.querySelector('#password').value,
        tipo= document.querySelector('#tipo').value;

    if(usuario === '' || password === ''){
        Swal({
            type: 'error',
            title: 'Oops...',
            text: 'Debes llenar todos los campos.'
          })
    }else{
        //Ejecutar AJAX

        const datos = new FormData();
        datos.append('usuario',usuario);
        datos.append('password',password);
        datos.append('accion',tipo);

        //console.log(...datos);
        //Llamado a AJAX

        var xhr = new XMLHttpRequest();

        xhr.open('POST','inc/modelos/modelo-admin.php',true);

        xhr.onload = function(){
            if(this.status === 200){
                const respuesta = JSON.parse(xhr.responseText);

                if(respuesta.respuesta === 'correcto'){
                    if(respuesta.tipo === 'crear'){
                        Swal({
                            type: 'success',
                            title: '¡Creado!',
                            text: 'Usuario creado satisfactoriamente.'
                          })
                    }
                }else if(respuesta.respuesta === 'incorrecto'){
                    if(respuesta.tipo === crear){
                        
                    }
                }
            }
        }

        xhr.send(datos);


    }
}
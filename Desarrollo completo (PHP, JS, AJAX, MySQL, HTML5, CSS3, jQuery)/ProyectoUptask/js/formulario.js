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
               // console.log(respuesta);
                if(respuesta.respuesta === 'correcto'){
                    if(respuesta.tipo === 'crear'){
                        Swal({
                            type: 'success',
                            title: '¡Creado!',
                            text: 'Usuario creado satisfactoriamente.'
                          })
                          .then(resultado =>{
                            if(resultado.value){
                                document.querySelector('#formulario').reset();
                            }  
                            
                          })
                    }else if(respuesta.tipo === 'login'){
                        /* Swal({
                            type: 'success',
                            title: '¡Logueado!',
                            text: 'Presiona OK para abrir tu dashboard.'
                          })
                          .then(resultado =>{
                              if(resultado.value){
                                  window.location.href='index.php';
                              }
                          }) */
                          window.location.href='index.php';

                    }
                }else if(respuesta.respuesta === 'incorrecto'){
                    if(respuesta.tipo === 'crear'){
                        if(respuesta.error[0].errno === 1062){
                            Swal({
                                type: 'error',
                                title: 'El usuario ya existe',
                                text: 'Por favor, intenta con un nuevo usuario.'
                              })
                        }else{
                            Swal({
                                type: 'error',
                                title: 'oops...',
                                text: 'Hubo un error, intentalo de nuevo.'
                              })
                        }
                    }else if(respuesta.tipo === 'login'){
                        if(respuesta.error === 'Contraseña incorrecta.'){
                            Swal({
                                type: 'error',
                                title: 'Contraseña incorrecta.',
                                text: 'Por favor, digita la contraseña de nuevo.'
                              })
                        }else if(respuesta.error === 'Usuario incorrecto.'){
                            Swal({
                                type: 'error',
                                title: 'El usuario no existe.',
                                text: 'Por favor, digita el usuario de nuevo.'
                              })
                        }
                    }
                }
            }
        }

        xhr.send(datos);


    }
}
/* $(document).ready(function(){
    $('#contenido').append('Con jQuery es mas facil');
});

document.addEventListener('DOMContentLoaded',function(event){
    var elemento = document.getElementById('contenido2');

    var parrafo = document.createElement('p');
    var texto = document.createTextNode('JavaScript es dificil');

    parrafo.appendChild(texto);
    elemento.appendChild(parrafo);
})(); */

$(function(){
    'use strict';


    //$('main').children()[1].childNodes[1].innerText="Test"; // Para tener una idea de como se cambian los valores.
    /* $('main article:first h2').text(); // Ver el texto en el h2
    $('main article:first h2').text('Hola'); // Modificar el texto en el h2
    $('main article:first h2').html('<h1>Londres 2018</h1>); // Modificar el texto en el h2 */
    /* $('main').on({
        click:function(){
            $(this).addClass('fondorojo activo');
        },mouseenter:function(){
            $(this).addClass('fondorojo');
        },mouseleave:function(){
            $(this).addClass('activo');
        }
    }) */

    //$('.navegacion').children().children().children(); // Obtener los hijos de un elemento
   // $('article:first').parent();
    //$('article:first').parent().children()[1] // Recorremos los elementos hijo como un arreglo y asi podemos acceder a cad auno de los elementos.
    //$('article:first').next().next(); // Seleccionamos el siguiente elemento.

    //$('div.logo img').addClass('activo');

    $('.navegacion').show();

    //$('.navegacion nav ul li:first').addClass('activo');
    //$('main article:first').addClass('activo');

    /* $('.navegacion ul li a').on('click',function(e){
        $('.navegacion ul li a').removeClass('activo');
        e.preventDefault();
        $(this).addClass('activo');
    }); */
    
    /* $('#menu').on('click',function(){
        $('#navegacion').show(); // show es lo contrario a hide.
    }); */
    
    /* $('div.logo img').on('click', function(){
        $(this).remove();
    });

    $('div.logo img').on('mouseenter', function(){
        console.log('Hover sobre el logo');
    });
    $('div.logo img').on('mouseleave', function(){
        console.log('Hover fuera del logo');
    }); */

    //$('main article:first'). hide(); //Oculta el elemento como display: none
    //$('main article:first').remove(); //Elimina el elemento.

    /* var copia = $('main article:last').clone();
    $('main').append(copia); //De ultimas
    //$('main').prepend(copia); //De primeras */

    /* var copia = $('main article:last').clone();

    $(copia).appendTo('main');
    $(copia).prependTo('main'); */
});


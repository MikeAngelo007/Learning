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

    $('#menu').on('click',function(){
        $('#navegacion').show(); // show es lo contrario a hide.
    });
    
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


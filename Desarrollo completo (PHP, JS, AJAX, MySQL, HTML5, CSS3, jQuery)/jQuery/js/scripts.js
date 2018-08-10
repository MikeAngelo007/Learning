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




    $('.servicios nav a').on('click', mostrarTabs);

    function mostrarTabs(){
        var enlace = $(this).attr('href');
        $('.nuestros-servicios div').fadeOut();
        $('.servicios nav a').removeClass('activo');

        $(this).addClass('activo');
        $(enlace).fadeIn();
    }
    /* $('.navegacion').show();

    var proximosViajes = ['Londres','Madrid','Barcelona','Paris']

    $.each(proximosViajes, function(i,v){
        console.log('Indice: '+i+'    Valor:'+v);

        if(i == 0){
            $('aside').append('<h2>Proximos Viajes</h2>')
        }
        $('aside').append('<li>'+ v +'</li>')

    })


    var viajesPorFecha = {
        Primero: 'Londres',
        Segundo: 'Bogota',
        Tercero: 'Miami',
        Cuarto: 'Moscu'
    }

    $.each(viajesPorFecha, function(i,v){
        if(i == 'Primero'){
            $('aside').append('<h2>Por fecha: </h2>')
        }
        $('aside').append('<li>'+ i + '-' + v +'</li>')

    }) */
    /////////////////////////////////////////////////////////////////////////////////////////////////////////77
    /* $('.logo img').on('click',cargarAjax);

    function cargarAjax(){
        $.ajax('promo.txt',{
            success: agregarContenido,
            type: 'GET',
            datatype:'text'
        })
    }

    function agregarContenido(data, status, jqxhr){
        $('aside').text(data); // Asi lo carga como text 
        //$('aside').html(data); // Asi lo carga como codigo html
        console.log(status);
    } */


    //$('aside').load('promo.txt'); //Lo carga automaticamente como codigo html

    ///////////////////////////////////////////////////////////////////////////////////////////////////////

    /* $('.logo img').click(function(){
        $('main article:first').slideUp(1000);
    });

    $('aside').click(function(){
        $('main article:first').slideDown(1000);
    }); */

    /* $('.logo img').on('click',function(){
        $(this).animate({'width':'200px'},20000); // 1000 equivale a 1 segundo.
    });

    $('main article img').on('mouseenter',aumentarImagen);
    $('main article img').on('mouseleave',disminuirImagen);

    function aumentarImagen(){
        $(this).animate({'width':'100%'});
    }

    function disminuirImagen(){
        $(this).animate({'width':'350px'});
    } */

    /* $('.logo img').css({'width':'400px'});
    $('main article h2').css({'color':'#db008d'});
    $('aside').css({'background-color':'#e1e1e1',
                    'text-transform':'uppercase'
    });


    $('.navegacion ul li a').on('click',cambiarColor);
    function cambiarColor(){
        $('.navegacion').css({'background-color':'red'});
    } */

    /* $('.navegacion ul li:first a').attr('href'); // Seleccionar un atributo del elemento.
    $('.navegacion ul li:first a').attr('href','http://udemy.com'); // Cambiar el valor del atributo o agregar un nuevo atributo


    $('main article:first img').on('click',function(){
        $(this).attr('src','img/imagen_2.jpg');
    }) */
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


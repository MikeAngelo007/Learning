/**
 * En consola:
 *  document >> Muestra todo el codigo HTML de la pagina
 *  document.head || document.body >> Muestra el codigo del head o del body segun el caso.
 * 
 *  document.querySelector('header') || document.querySelector('#navegacion') || document.querySelector('.header') || $('header')>> Muestra el codigo de la etiqueta header (Ya que no podemos hacer document.body.header o algo parecido)
 * 
 * document.getElementById('logo')
 */

 (function(){
     'use strict';
     document.addEventListener('DOMContentLoaded', function(){
        /* Todo lo que este dentro de esta funcion,  */
        
        /* var logo = document.getElementById('logo');
        console.log(logo); */
        /*
        *  logo.hasAtributte('class') : PAra ver si tiene una clase asociada
        * logo.getAttribute('class'); : Para ver cual es la clase asociada
        * logo.setAttribute('class', 'new_class'); : Para cambiar la clase asociada 
        * navegation.style.display = 'none' */



        /* var fg = document.getElementsByClassName('navegacion');

        console.log(fg[1]);

        fg[0].style.display='none'; */


        /* var enlaces = document.getElementsByTagName('a');
        console.log(enlaces.length);

        for(var i = 0; i<enlaces.length;i++){
            enlaces[i].setAttribute('target','_blank');
        }


        var enlacesSidebar = document.getElementById('sidebar').getElementsByTagName('a');
        console.log(enlacesSidebar);

        for(var i = 0; i<enlacesSidebar.length;i++){
            enlacesSidebar[i].setAttribute('href','https://www.google.com');
        } */

        /*     //querySelector funciona como si nombraramos el elemento en CSS
        var contenido = document.querySelector('.contenido');
        console.log(contenido);

        var enlaces = document.querySelector('a');
        console.log(enlaces);


        var encabezado = document.querySelector('#logo');
        console.log(encabezado);

            //querySelectorAll muestra todos los elementos existentes del que nombramos ('-') , ademas que nos permite colocar un segundo parametro : ('-,-')
        var enlacesAll = document.querySelectorAll('a,footer p');
        console.log(enlacesAll); */


        /* var enlace = document.querySelectorAll('a');
        console.log(enlace);

        for(var i = 0; i < enlace.length; i++){
            console.log(enlace[i].innerText);
        } */

        /* var enlaces = document.querySelectorAll('#menu ul li a');
        console.log(enlaces[1].innerText);
        console.log(enlaces[1].nodeType);
        console.log(enlaces[1].nodeName);
        console.log(enlaces[1].attributes);
        console.log(enlaces[1].firstChild);
        console.log(enlaces[1].firstChild.nodeValue);
        enlaces[1].firstChild.nodeValue = "Home";
        console.log(enlaces[1].firstChild.nodeValue); */



        /* var sidebarr = document.querySelector('#sidebar');

        var nuevoElemento = document.createElement('h1')
        var nuevotexto = document.createTextNode('Hola mundo')

        nuevoElemento.appendChild(nuevotexto);
        sidebarr.appendChild(nuevoElemento);



        var enlacesSide = document.querySelectorAll('#sidebar ul');
        var nuevoEnlace = document.createElement('A');
        nuevoEnlace.setAttribute('href','#');
        var nuevoText = document.createTextNode('Entrada 6');

        nuevoEnlace.appendChild(nuevoText);
        var nuevaLista = document.createElement('LI');
        nuevaLista.appendChild(nuevoEnlace);

        enlacesSide[0].appendChild(nuevaLista); */

        /* var contenido = document.querySelectorAll('main');
        var nuevoContenido = contenido[0].cloneNode(true);

        var sidebar = document.querySelector('aside');

        sidebar.insertBefore(nuevoContenido, sidebar.childNodes[5]); */

        var sidebar = document.querySelector('aside');

        var masVisitados = document.createElement('H2');
        var textoVisitados = document.createTextNode('Los post mas visitados');

        masVisitados.appendChild(textoVisitados);
        sidebar.insertBefore(masVisitados, sidebar.childNodes[0]);

        

     });
     
 })();

/**  logo.hasAtributte('class') : PAra ver si tiene una clase asociada */
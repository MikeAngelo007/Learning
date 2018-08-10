(function(){
    'use strict';
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function(){

        //////////////////////////////////////////////////////////////////


        var map = L.map('mapa').setView([4.678676, -74.046934], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([4.678676, -74.046934]).addTo(map)
            .bindPopup('Este es un lugar de prueba (Google :v)')
            .openPopup();
        L.marker([4.65971, -74.055817]).addTo(map)
            .bindTooltip('Este es un lugar de prueba (Modern Gym)')
            .openTooltip();

        ///////////////////////////////////////////////////////////////////
        //Campos Datos usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');
        //Campos pases

        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Campos resumen

        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        //Extras
        var etiquetas = document.getElementById('etiquetas');
        var camisas = document.getElementById('camisa_evento');


        calcular.addEventListener('click', calcularMontos);
        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur',validarCampos);
        apellido.addEventListener('blur',validarCampos);
        email.addEventListener('blur',validarCampos);
        email.addEventListener('blur',validarMail);

        function validarMail(){
            if(this.value.indexOf('@') > -1 ){
                errorDiv.style.display = 'none';
            }else{
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Debes colocar un correo electronico';
                this.focus();
                errorDiv.style.background = 'red';
                errorDiv.style.color = 'white';
            }
        }
        function validarCampos(){
            if(this.value === ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es obligatorio';
                this.focus();
                errorDiv.style.background = 'red';
                errorDiv.style.color = 'white';
            }else{
                errorDiv.style.display = 'none';
            }
        }

        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === ''){ //Revisa que el usuario haya elegido regalo
                alert('Debes escoger un regalo');
                regalo.focus();
            }else{
                var boletoDia = parseInt(pase_dia.value,10)||0,
                    boleto2Dias = parseInt(pase_dosdias.value,10)||0,
                    boletoCompleto = parseInt(pase_completo.value,10)||0,
                    cantCamisas = parseInt(camisas.value,10)||0,
                    cantEtiquetas = parseInt(etiquetas.value,10)||0;

                var totalPagar = ((boletoDia*30)+(boleto2Dias*45)+(boletoCompleto*50)+((cantCamisas*10)*.93)+(cantEtiquetas*2))*1000;
                

                var listadoProductos = [];

                if(boletoDia === 1){
                    listadoProductos.push(boletoDia+ ' Pase por día');
                }
                if(boletoDia > 1){
                    listadoProductos.push(boletoDia+ ' Pases por día');
                }
                if(boleto2Dias === 1){
                    listadoProductos.push(boleto2Dias+ ' Pase por 2 días');
                }
                if(boleto2Dias > 1){
                    listadoProductos.push(boleto2Dias+ ' Pases por 2 días');
                }
                if(boletoCompleto === 1){
                    listadoProductos.push(boletoCompleto+ ' Pase Completo');
                }
                if(boletoCompleto > 1){
                    listadoProductos.push(boletoCompleto+ ' Pases Completos');
                }
                if(cantCamisas === 1){
                    listadoProductos.push(cantCamisas+ ' Camisa');
                }
                if(cantCamisas > 1){
                    listadoProductos.push(cantCamisas+ ' Camisas');
                }
                if(cantEtiquetas === 1){
                    listadoProductos.push(cantEtiquetas+ ' Etiqueta');
                }
                if(cantEtiquetas > 1){
                    listadoProductos.push(cantEtiquetas+ ' Etiquetas');
                }
                lista_productos.style.display = 'block';
                lista_productos.innerHTML = '';
                for (var i = 0; i <listadoProductos.length;i++){
                    lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                }

                suma.innerHTML = '$'+totalPagar.toFixed(2);
            }
        };

        function mostrarDias(){
            var boletoDia = parseInt(pase_dia.value,10)||0,
                    boleto2Dias = parseInt(pase_dosdias.value,10)||0,
                    boletoCompleto = parseInt(pase_completo.value,10)||0;
            
            var diasElegidos = [];

            var viernes = document.getElementById('viernes');
            var sabado = document.getElementById('sabado');
            var domingo = document.getElementById('domingo');

            viernes.style.display = "none",
            sabado.style.display = "none",
            domingo.style.display = "none";

            if(boletoDia > 0 && boleto2Dias == 0 && boletoCompleto == 0){
                diasElegidos.push('viernes');
            }

            if(boleto2Dias > 0 && boletoCompleto == 0){
                diasElegidos.push('viernes','sabado');
            }
            if(boletoCompleto > 0){
                diasElegidos.push('viernes','sabado','domingo');
            }

            for(var i = 0; i < diasElegidos.length; i++){
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }
    });
})();



$(function(){
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click',function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').fadeOut();

        var presionado = $(this).attr('href');
        $(presionado).fadeIn(1000);

        return false; //Esto evita que la pagina salte al id.
    });
});
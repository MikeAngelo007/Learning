/******************************************************************* DOM ***********************************************************/
var total, numero1,numero2;

function totalPagar(numero1,numero2){
    total = numero1 * numero2;
    return total;
}

var granTotal = totalPagar(10,20);

var calculadora = document.getElementById('resultado').innerHTML = granTotal+ " Dolares";







/*********************************************************++**** Variables *******************************************/
/* var nombre = prompt('Como te llamas?');
var pais = prompt('De donde eres?');

var test = 'Boom';
        
alert("Bienvenido "+nombre+" de "+pais+test); */




/* var modelo = 'Nissan';
var motor = 5.5;
var color = "Azul";

var modelo2, motor2, color2;

modelo2 = "Renault";
motor2 = 33;
color2 = "Yellow";

modelo = 'Challenger'; */


/* var modelo = 'Speranto';
console.log(modelo); */

/************************************************************************************ Objetos *********************************************/
/* var auto ={
    modelo : 'Nissan',
    motor : 5.5,
    color : "Azul",
    clasico: 'true',
    anio: 1968
}

console.log(auto.modelo+' '+auto.anio); */

/*** puedo modificar los atributos de un objeto. Ej: 
auto.modelo = "Renault";


para eliminar un atributo:

delete auto.clasico
***/


/***************************************************************************** Arreglos ***********************************************************/

/** Los ARREGLOS llevan [] y los OBJETOS llevan {} */
/* var games = ['Tomb Raider', 'Halo', 'Battlefield', 'Fortnite', 'PUBG']
var consolas = new Array("Xbox One", "Wii", "Play Station", "Nintendo" );


var nArray = games.filter(function(equipo){
    return(equipo != 'Halo');
})

console.log(nArray); */

/** Para imprimir:
Todo el arreglo: games 

n-elemento del arreglo (iniciando desde 0): games[n]

Modificar un elemento: games[1] = 'Burtnout'

Insertar elemento: games.push(elemento);

Eliminar elemento: games.pop(elemento);
                    .pop() Elimina el ultimo elemento.
                    .splice(a,b)  a -> Posicion desde la cual se borrara, b -> Cuantos se borraran

Tamaño: games["length"]
        games.length

Imprimirlo en reverso: games.reverse();

Ordenarlo (1-9A-Z): games.sort();

Posicion de un elemento: games.indexof(elemento);



Filtrar:
var nArray = games.filter(function(equipo){
    return(equipo != 'Halo');
})
**/

// Comentario de una linea :V




/************************************************************************** Espacios en blanco ******************************/
//El espacio en blanco no afecta en nada, solamente dentro de un string ya que seria una cadena de espacios.
/* var
nombre
=
'juan                                                    Manual'
; */



/****************************************************************************** Numeros ********************************/

/* var numero1 = "15";
var numero2 = -20;
var numero3 = 21.5;
var numero4 = 20;
var numero5 = "15.1416";
var numero6 = -3.5;

console.log(typeof(numero1));
console.log(typeof(numero2));
console.log(typeof(numero3));
console.log(typeof(numero4));
console.log(typeof(numero5));
console.log(typeof(numero6));

var numero7 = parseInt(numero1);
console.log(numero7+numero6);

var numero8 = parseFloat(numero5);
console.log((numero8+numero6).toFixed(2));

//toFixed limitara el numero de decimales

var numero9 = Number(numero1);
console.log(typeof(numero9)); */

/**************************************************************************** Fechas ***********************************/

/* var fecha = new Date();
console.log("Año: "+fecha.getFullYear());
console.log("Dia: "+fecha.getDate());
console.log("dia de la semana: "+fecha.getDay());
console.log("Mes: "+fecha.getMonth());
console.log("Hora: "+fecha.getHours());
console.log("Minutos: "+fecha.getMinutes());
console.log("Seconds: "+fecha.getSeconds());
console.log("Miliseconds: "+fecha.getMilliseconds()); */




/************************************************************************************************ Strings **************************************/


/* var text = "Esto es una cadena de texto";
console.log(text);
console.log(typeof(text));


console.log(text.toUpperCase()); // Todo en mayuscula
console.log(text.length); // Tamaño del string
console.log(text.split(" ")); // Separa en sub strings
console.log(text.indexOf("cadena")); // Indice de donde inicia 'cadena'
console.log(text.slice(0,11)); // Muestra desde el indice 0 al 11
console.log(text.toLowerCase()); // Todo en minuscula */


/**************************************** CONDICION IF, IFELSE, ELSE ************************************************************************************/

/* var cantidadPagar = 100;

var saldo = 50;

if(saldo < cantidadPagar){
    console.log("No hay pa' pagar");
}else{
    console.log('La operacion se realizo con exito');
}



var edad1 = 21;
var edad2 = 22;

if(edad1 < edad2){
    console.log('1 menor que 2');
}else if (edad1 > edad2) {
    console.log('1 mayor que 2');
} else {
    console.log('1 igual 2')
}
 */

/* == : Compara los elementos, no el tipo de objeto. es decir, "20" y 20 son iguales.
   === : Compara los elementos y el tipo de objeto. Es decir, "20" y 20 son diferentes 
        porque uno es string y el otro es number.*/




/* var cantidadPagare = 100;
var saldare = 101;

var recarga = 10;
var usuarioValido = false;

if(saldare > cantidadPagare && usuarioValido){
    console.log('Exito');
}else{
    console.log('No exito');
}



var pagar = 1000;
var efectivo = 500;
var tarjeta = true;

if(efectivo > pagar || tarjeta){
    console.log('Exitoso');
}else{
    console.log('No exitoso');
} */











/************************************************************** Switch *****************************************************************/

/* var metodoPago = 'PU';

switch (metodoPago) {
    case 'TC':
        console.log('Pago con tarjeta');
        break;
    case 'EFE':
        console.log('Pago con efectivo');
        break;
    
    case 'PP':
        console.log('Pago con PayPal');
        break;

    default:
        console.log('Metodo no valido');
        break;
} */


/************************************************************* Operadores *****************************************************************/

/* var numero1 = 20;
var numero2 = 10;

console.log(numero1+numero2);
console.log(numero1-numero2);
console.log(numero1*numero2);
console.log(numero1/numero2);

numero1--;
console.log(numero1);

numero2++;
console.log(numero2);

var numero3 = 30;
console.log(numero3);
numero3 += 30;
console.log(numero3);
numero3 -= 43;
console.log(numero3);
numero3 *= 13;
console.log(numero3);
numero3 /= 24;
console.log(numero3);

var cantidadPagare = 100;
var saldare = 101;

var recarga = 10;

if(saldare > cantidadPagare){
    console.log('Exito');
    saldare -= cantidadPagare;
    console.log('Te quedan: '+saldare);

}else{
    console.log('No exito');
    cantidadPagare -= saldare;
    console.log('Te faltan '+ cantidadPagare);
} */


/************************************************************************** FOR y LOOPS *********************************/
//var i = 0;

/* for(i = 0; i < 10; i++){
    if(i == 5){
        console.log("CINCO!")
        continue;
    }
    console.log(i);
} */

/* while(i < 23){
    console.log("un dos..."+i)
    i++;
}

var contar = 0;
do{
    console.log(contar + " es igual a "+ contar*8);
}while(contar++ < 12) */


/******************************************************************* Funciones *******************************************************************/

/* function suma(){
    console.log(2+2);
}

suma();


var my_function = function(){
    console.log("Entro");
}

my_function();


var auto ={
    modelo : 'Nissan',
    motor : 5.5,
    color : "Azul",
    clasico: 'true',
    anio: 1968
}

function recorrer_objeto(automovil){
    console.log(this.modelo);
    console.log(this.motor);
    console.log(this.color);
    console.log(this.clasico);
    console.log(this.anio);
}

auto.mostrarAuto = recorrer_objeto;
auto.mostrarAuto(); */

/** Argumentos **/

/* function sumaArg(n1,n2){
    console.log(n1+n2);
}


sumaArg(20,6);

function multArg(n1,n2){
    console.log(n1*n2);
}

multArg(13,5); */


/** Retornando **/


/* var tester = 1;

function multiplicador(arg){
    arg *= 7;
    return arg;
}

var resultado = multiplicador(6);
console.log(resultado);
 */
// const es constante
// return hace que la funcion retorne el valor


/**************************************************** SCOPE ************************************************************************************/
/* scope se refiere a usar solo lo que existe. Una funcion no puede llamar una variable si no es global o no esta declarada dentro de si*/
/* function scope1(){
    var a = 10;
    console.log(b);//como aqui
}

function scope2(){
    var b = 35;
    console.log(b);
}

scope1();
scope2(); */
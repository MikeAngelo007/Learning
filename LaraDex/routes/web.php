<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi_primer_ruta',function(){
    return 'Logrado!';
});
Route::get('/name/{name}',function($name){
    return 'Imprime: '.$name;
});

/* el ? simboliza que esa variable es opcional y se le da un valor por defecto*/
Route::get('/name/{name?}/lastname/{lastname?}',function($name='John',$lastname='Doe'){
    return 'Imprime: '.$name.' con un '.$lastname;
});

/* Para enrutar al metodo de un controlador se hace:
Route::[metodo]('url','[nombre del controlador]@[nombre del metodo]')

*/
Route::get('/prueba','PruebaController@prueba');

Route::get('/prueba/{param}','PruebaController@pruebaPar');

Route::get('/prueba/{param}/cont/{variab}','PruebaController@pruebaParTwo');




Route::resource('trainers','TrainerController'); /* Enrutar a un controlador resource o controlador restfull */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

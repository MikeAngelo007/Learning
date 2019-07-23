<?php

namespace LaraDex\Http\Controllers;
use LaraDex\Http\Controllers\Controller;
class PruebaController extends Controller{
    public function prueba(){
        return 'Estoy dentro de PruebaController';
    }

    public function pruebaPar($param){
        return 'Estoy dentro de PruebaController y recibo '.$param;
    }

    public function pruebaParTwo($param,$variab){
        return 'Estoy dentro de PruebaController y recibo '.$param.' + '.$variab;
    }

}

?>
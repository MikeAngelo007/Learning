<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //
    protected $fillable = ['name','avatar','slug']; /*Determinar cuales campos son editables*/
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function pokemons(){
        return $this->hasMany('LaraDex\Pokemon');     /** Cada trainer tiene varios pokemons */
    }
}

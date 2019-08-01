<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Pokemon;
use LaraDex\Trainer;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Trainer $trainer, Request $request)
    {
        //
        #$pokemons = Pokemon::all();
        $pokemons = $trainer->pokemons;
        if($request->ajax()){
            return response()->json($pokemons,200);
        }
        return view('pokemons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Trainer $trainer, Request $request) /** Este metodo es llamado desde el componente CreatePokemon */
    {
        //

        if($request->ajax()){
            $pokemon= new Pokemon();
            $pokemon->name = $request->input('name');
            $pokemon->picture = $request->input('picture');
            $pokemon->trainer()->associate($trainer)->save();   
            #$pokemon->save();

            return response()->json([
                'message' => 'Pokemon creado correctamente',
                'pokemon'=> $pokemon
            ],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

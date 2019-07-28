<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Trainer;
use LaraDex\Http\Requests\StoreTrainerRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers= Trainer::all();
        return view('trainers.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store(StoreTrainerRequest $request)
    {
        //return $request->all();
        
        
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name); /* Crea y guarda las imagenes en una carpeta images*/
        }

        $trainer = new Trainer(); /* Importar Trainer usando: use LaraDex\Trainer;*/
        $trainer->name = $request->input('name');
        $trainer->avatar = $name;
        $trainer->slug = $request->input('slug');
        $trainer->save();
        return redirect()->route('trainers.index')->with('info','Entrenador creado!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
   
    public function show(Trainer $trainer) /** En el modelo se configuro que el slug fuera el key */
     //public function show($slug)
    {   
        //$trainer= Trainer::findOrFail($id);
        //$trainer=Trainer::where('slug','=',$slug)->firstOrFail(); 
        return view('trainers.show',compact('trainer'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        //
        return view('trainers.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {   
        $validatedData = $request->validate([

            'name'=>'max: 100',
            'avatar'=>'image'
        ]);
        $trainer->fill($request->except('avatar')); //Rellena cada campo de trainer con los datos del request, excepto avatar.
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar= $name;
            $file->move(public_path().'/images/',$name); /* Crea y guarda las imagenes en una carpeta images*/
        }
        $trainer->save();

        return redirect()->route('trainers.index')->with('info','Entrenador editado!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        //
        $file_path=public_path().'/images/'.$trainer->avatar;
        \File::delete($file_path);
        $trainer->delete();
        return redirect()->route('trainers.index')->with('info','Entrenador eliminado!');
    }
}

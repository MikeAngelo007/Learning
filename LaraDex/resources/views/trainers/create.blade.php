@extends('layouts.app')



    @section('title','Trainer create')
    

    @section('content')
    <div class="container">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    @endsection

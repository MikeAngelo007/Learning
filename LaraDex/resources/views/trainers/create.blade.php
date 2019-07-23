@extends('layouts.app')



    @section('title','Trainer create')
    

    @section('content')
    
        <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
            <!-- enctype="multipart/form-data" se usa en formularios con subida de archivos -->
            @csrf
            <div class="form-group">
                <label for="">Nombre: </label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                    <label for="">Avatar: </label>
                    <input type="file" name="avatar" id="avatar">
                </div>
            <div class="form-group">
                        <label for="">ID: </label>
                        <input type="text" class="form-control" name="slug" id="slug">
                    </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    
    @endsection

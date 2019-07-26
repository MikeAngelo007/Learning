@extends('layouts.app')



    @section('title','Trainer edit')
    

    @section('content')
    
<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
            <!-- enctype="multipart/form-data" se usa en formularios con subida de archivos -->
            @method('put')
            @csrf
            <div class="form-group">
                <label for="">Nombre: </label>
            <input type="text" class="form-control" value="{{$trainer->name}}" name="name" id="name">
            </div>

            <div class="form-group">
                    <label for="">Avatar: </label>
            <input type="file" name="avatar" id="avatar">
                </div>
            <div class="form-group">
                        <label for="">ID: </label>
            <input type="text" class="form-control" name="slug" value="{{$trainer->slug}}" id="slug">
                    </div>
            <button type="submit" class="btn btn-primary">Guardar edicion</button>
        </form>
    
    @endsection
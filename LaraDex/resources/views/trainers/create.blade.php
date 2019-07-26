@extends('layouts.app')



    @section('title','Trainer create')
    

    @section('content')
    
        {!! Form::open(['route'=>'trainers.store', 'method'=>'POST', 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','Nombre: ') !!}
                {!! Form::text('name',null,['class'=>'form-group']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('avatar','Avatar: ') !!}
                {!! Form::file('avatar') !!}
            </div>
            <div class="form-group">
                {!! Form::label('slug','ID: ') !!}
                {!! Form::text('slug',null,['class'=>'form-group']) !!}
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}

        <!-- enctype="multipart/form-data" se usa en formularios con subida de archivos -->
        <!--<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
            
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
        </form> -->
    
    @endsection

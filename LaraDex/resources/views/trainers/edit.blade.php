@extends('layouts.app')



    @section('title','Trainer edit')
    

    @section('content')

    <!-- LARAVEL COLLECTIVE: EDIT-->
    <!-- {!! Form::model($trainer,['route'=>['trainers.update', $trainer], 'method'=>'PUT', 'files'=>true])!!}
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
        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close()!!} -->
    <!-- enctype="multipart/form-data" se usa en formularios con subida de archivos -->
 <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
            
            @method('put')
            @include('trainers.form')
            <button type="submit" class="btn btn-primary">Guardar edicion</button>
        </form>
    
    @endsection
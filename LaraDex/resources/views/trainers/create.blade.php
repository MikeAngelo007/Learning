@extends('layouts.app')



    @section('title','Trainer create')
    

    @section('content')
    
    <!-- LARAVEL COLLECTIVE: CREATE -->
     <!--   {!! Form::open(['route'=>'trainers.store', 'method'=>'POST', 'files'=>true]) !!}
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
    {!! Form::close() !!} -->

    @if( $errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
            
    @endif
        <!-- enctype="multipart/form-data" se usa en formularios con subida de archivos -->
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
            
            @include('trainers.form')
            <button type="submit" class="btn btn-primary">Guardar</button>
    </form> 
    
    @endsection

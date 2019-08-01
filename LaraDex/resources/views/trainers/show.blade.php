@extends('layouts.app')



    @section('title','Trainer '.$trainer->name)
    

    @section('content')

    
    @include('common.session')
    
    <div class="text-center">
        <h1>{{$trainer->name}}</h1>

        <img style="height:250px; width:250px;background-color:#EFEFEF;margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Avatar de {{$trainer->name}}">

        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
        <h1>Pokemon's</h1>
        @if (Auth::user())
            @if (Auth::user()->hasAnyRole(['admin']))
                <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>

                <form method="POST" action="/trainers/{{$trainer->slug}}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <add-pokemon-btn></add-pokemon-btn>
                <create-form-pokemon></create-form-pokemon>
            @endif
        @endif
        

        <pokemons-component></pokemons-component>
    </div>
    @endsection
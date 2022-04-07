@extends('layouts.base')

@section('pageTitle', 'Comics')


@section('content')

<ul>
    <div class="btn-insert-comic">

        <a href="{{route('comic.create')}}">Insert comic</a>
    </div>
    
    @foreach ($comics as $comic)
    <div class="container-comics">
    
            <h1>N° {{$comic->id}}</h1>
            <h2>{{$comic->title}}</h2>
            <div class="overlay">
                <a href="{{route('comic.show', $comic->id)}}"><img src="{{$comic->thumb}}" alt=""></a>
            </div>
            <p>{{$comic->type}}</p>
            
        </div>
        <hr>
            @endforeach
    
        </ul>


@endsection
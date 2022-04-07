@extends('layouts.base')

@section('pageTitle')

{{$comic->title}}

@endsection


@section('content')

    <div class="wrapper-comic">

        <div class="container-comic">

            <ul>

                <h1>{{$comic->title}}</h1>
                
                <div class="container-image">
                    <a href="{{$comic->thumb}}"><img src="{{$comic->thumb}}" alt=""></a>
                </div>

                <div class="container-text">
                    <p>{{$comic->description}}</p>
                </div>
                    
                <div class="details">
                    <li><h3> Serie: {{$comic->series}}</h3></li>
                    <li><h3>Price: ${{$comic->price}}</h3></li>
                    <li><h3>Sale date: {{$comic->sale_date}}</h3></li>
                    <li><h3>{{$comic->type}}</h3></li>
                </div>

            </ul>

            <div class="back">
                <a href="{{route('comic.index')}}"><h4>>> Go back</h4></a>
            </div>
            
        </div>

    </div>

@endsection
@extends('layouts.base')

@section('pageTitle', 'Add comic')


@section('content')

    <h1>Insert comic</h1>
    
    <div class="create-container">

        <form method="POST" action="{{route('comic.store')}}">
        
            
            @csrf
            
            <div class="box">
                <label for="title">Title</label>
                <input placeholder="Insert title" type="text" id="title" name="title">
            </div>
            
            <div class="box">
                <label for="thumb">Image address</label>
                <input placeholder="Insert image address" type="text" id="thumb" name="thumb">
            </div>
            
            <div class="flex-column">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="9"></textarea>
            </div>
            
            <div class="box">
                <label for="series">Serie</label>
                <input placeholder="Insert serie" type="text" id="series" name="series" required>
            </div>
            
            <div class="box">
                <label for="price">Price</label>
                <input placeholder="Insert price" type="number" id="price" name="price"
                min="1"
                max="100000">
            </div>
            
            <div class="box">
                <label for="sale_date">Sale date</label>
                <input placeholder="Insert sale data" type="date" id="sale_date" name="sale_date"
                value="2022-04-07"
                min="1934-01-01"
                max="2022-04-07">
            </div>
            
            <div class="box">
                <label for="type">Insert type</label>
                <select name="type" id="type">
                    <option hidden>Select type</option>
                    <option value="comic_book">COMIC BOOK</option>
                    <option value="graphic_novel">GRAPHIC NOVEL</option>
                </select>
            </div>
            
            <button type="submit">Submit</button>
        </form>
        
        <a href="{{route('comic.index')}}"><h4>>> Go back</h4></a>
    </div>


@endsection
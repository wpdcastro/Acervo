@extends('layouts.app')

@section('content')

    <form action="{{route("storeBook")}}" method="POST">
        {{ csrf_field() }}
        Nome: <input type="text" name="title"><br>
        Editora
        <select name="publisher_id">
            @foreach($publishers as $publisher)
                <option value="{{$publisher->id}}">{{$publisher->name}}</option>
            @endforeach
        </select><br>
        Autor
        <select name="author_id">
            @foreach($authors as $author)
                <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Enviar">
    </form>

@endsection
@extends('layouts.app')

@section('content')

    <form action="{{route("updateBook")}}" method="post">
        {{ csrf_field() }}
        Titulo: {{ $book->title }} <br>
        Editora: {{ $book->publisher->name }} <br>
        Autor: {{ $book->author->name }} <br><br>
        Titulo:<input name="title" value="{{ $book->title }}"><br>
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
        </select>
        <input type="hidden" name="id" value="{{$book->id}}">
        <input type="submit" value="Enviar">
    </form>

@endsection
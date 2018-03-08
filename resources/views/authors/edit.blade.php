@extends('layouts.app')

@section('content')

    <form action="{{route("updateAuthor")}}" method="post">
        {{ csrf_field() }}
        Nome: <input type="text" name="name" value="{{$author->name}}"><br>
        <input type="hidden" name="id" value="{{$author->id}}">
        <input type="submit">
    </form>

@endsection
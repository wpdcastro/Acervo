@extends('layouts.app')

@section('content')

    <form action="{{route("updatePublisher")}}" method="post">
        {{ csrf_field() }}
        Nome: <input type="text" name="name" value="{{$publisher->name}}"><br>
        <input type="hidden" name="id" value="{{$publisher->id}}">
        <input type="submit" value="Enviar">
    </form>

@endsection
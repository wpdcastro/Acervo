@extends('layouts.app')

@section('content')

    <form action="{{route("storePublisher")}}" method="POST">
        {{ csrf_field() }}
        Nome: <input type="text" name="name"><br>
        <input type="submit" value="Enviar">
    </form>



@endsection
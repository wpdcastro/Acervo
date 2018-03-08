@extends('layouts.app')

@section('content')

<form action="{{route("storeAuthor")}}" method="POST">
    {{ csrf_field() }}
    Nome: <input type="text" name="name" placeholder="Nome"><br>
    <input type="submit">
</form>



@endsection
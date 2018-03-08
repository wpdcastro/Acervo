@extends('layouts.app')

@section('content')

<a href= "{{ route("newAuthor") }}"> Novo Autor</a>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Nome</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($authors as $author)
        <tr>
            <td>{{ $author->name }}</td>
            <td>
                <form action="authors/edit/{{$author->id}}" method="PUT">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $author->id }}">
                    <input type="submit"  class='btn btn-success pull-right btn-xs' value="Editar">
                </form>
            </td>
            <td>
                <form action="authors/delete/{{$author->id}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="hidden" name="id" value="{{ $author->id }}">
                    <input type="submit"  class='btn btn-danger pull-right btn-xs' value="Apagar">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
@extends('layouts.app')

@section('content')

    <a href= "{{ route("newBook") }}">Cadastrar Livro</a>


    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Editora</th>
            <th>Autor</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->publisher->name }}</td>
                <td>{{ $book->author->name }}</td>
                <td>
                    <form action="books/edit/{{$book->id}}" method="PUT">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $book->id }}">
                        <input type="submit"  class='btn btn-success pull-right btn-xs' value="Editar">
                    </form>
                </td>
                <td>
                    <form action="books/delete/{{$book->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="id" value="{{ $book->id }}">
                        <input type="submit"  class='btn btn-danger pull-right btn-xs' value="Apagar">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
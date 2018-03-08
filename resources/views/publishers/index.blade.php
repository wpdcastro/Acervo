@extends('layouts.app')

@section('content')

    <a href= "{{ route("newPublisher") }}"> Nova Editora</a>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Nome</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($publishers as $publisher)
            <tr>
                <td>{{ $publisher->name }}</td>
                <td>
                    <form action="publishers/edit/{{$publisher->id}}" method="PUT">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $publisher->id }}">
                        <input type="submit"  class='btn btn-success pull-right btn-xs' value="Editar">
                    </form>
                </td>
                <td>
                    <form action="publishers/delete/{{$publisher->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="id" value="{{ $publisher->id }}">
                        <input type="submit"  class='btn btn-danger pull-right btn-xs' value="Apagar">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
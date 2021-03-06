@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Acervo</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="{{ route("publishers") }}">Editoras</a>
                        <a href="{{ route("authors") }}">Autores</a>
                        <a href="{{ route("books") }}">Livros</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

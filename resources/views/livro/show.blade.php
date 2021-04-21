@extends('layouts.app')

@section('template_title')
    {{ $livro->name ?? 'Show Livro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Livro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('livros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $livro->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Preco:</strong>
                            {{ $livro->preco }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

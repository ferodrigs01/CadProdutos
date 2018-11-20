@extends('layout.app', [ "current" => "home" ])

@section('body')
    
    <div class="jumbotron bg-light border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de produtos</h5>
                        <p class="card-text">
                            Todos os seus produtos só não esqueça de cadastra-los
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de categorias</h5>
                        <p class="card-text">
                            Todos os suas categorias só não esqueça de cadastra-los
                        </p>
                        <a href="/categorias" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
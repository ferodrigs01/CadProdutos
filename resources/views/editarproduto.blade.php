@extends('layout.app', [ "current" => "produtos" ])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos/{{ $prod->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" name="nomeProduto" id="nomeProduto" class="form-control" value="{{ $prod->nome }}">
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preço do produto</label>
                    <input type="text" name="precoProduto" id="precoProduto" class="form-control" value="{{ $prod->preco }}">
                </div>
                <div class="form-group">
                    <label for="estoqueProduto">Estoque do Produto</label>
                    <input type="number" name="estoqueProduto" id="estoqueProduto" class="form-control" value="{{ $prod->estoque }}">
                </div>
                <div class="form-group">
                    <label for="selectCategoria">Categoria</label>
                    <select class="form-control" id="selectCategoria" name="selectCategoria">
                        <option disabled selected value="0">Selecione uma categoria</option>
                        @foreach($cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/produtos" class="btn btn-danger btn-sm">Cancelar</a>
            </form>
        </div>
    </div>
    
@endsection
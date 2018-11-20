@extends('layout.app', [ 'current' => 'produtos' ])

@section('body')
    
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" name="nomeProduto" id="nomeProduto" class="form-control" placeholder="Produto">
                </div>
                <div class="form-group">
                    <label for="estoqueProduto">Em estoque</label>
                    <input type="number" name="estoqueProduto" id="estoqueProduto" class="form-control" placeholder="1" min="1">
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preço</label>
                    <input type="text" name="precoProduto" id="precoProduto" class="form-control" placeholder="100.50">
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
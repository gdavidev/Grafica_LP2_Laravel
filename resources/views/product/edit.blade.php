@extends('layouts.main')

@section('page_name', 'Editar Produto')

@section('content')

<div id="product-create-container" class="col-md-6 offset-md-3 my-5 py-5">
    <h1>Edição de Produto</h1>
    <form action="/product/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="image">Imagem do Produto:</label>
            <input type="file" class="form-control" id="image" name="image" required>
            <img class="w-25" src="/img/products/{{ $product->image }}" alt="{{ $product->nome }}">
        </div>
        <div class="form-group mb-2">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto" value="{{ $product->nome }}" required>
        </div>
        <div class="form-group mb-2">
            <label for="categoria">Categoria:</label>
            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria" value="{{ $product->categoria }}" required>
        </div>
        <div class="form-group mb-2">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" required>{{ $product->descricao }}</textarea>
        </div>
        <div class="form-group mb-2">
            <label for="preco">Preço:</label>
            <input type="number" class="form-control" id="preco" name="preco" placeholder="Categoria" value="{{ $product->preco }}" required>
        </div>

        <input type="submit" class="btn btn-primary" value="Atualizar Produto">
    </form>
</div>

@endsection

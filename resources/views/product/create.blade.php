@extends('layouts.main')

@section('page_name', 'Criar Produto')

@section('content')

<div id="product-create-container" class="col-md-6 offset-md-3 my-5 py-5">
    <h1>Criação de registro de produto</h1>
    <form action="/product/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
            <label for="image">Imagem do Produto:</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="form-group mb-2">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto" required>
        </div>
        <div class="form-group mb-2">
            <label for="categoria">Categoria:</label>
            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria" required>
        </div>
        <div class="form-group mb-2">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>
        <div class="form-group mb-2">
            <label for="preco">Preço:</label>
            <input type="number" class="form-control" id="preco" name="preco" placeholder="Categoria" required>
        </div>

        <input type="submit" class="btn btn-primary" value="Criar Produto">
    </form>
</div>

@endsection

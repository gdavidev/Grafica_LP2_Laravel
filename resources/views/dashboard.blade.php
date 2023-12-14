@extends('layouts.main')

@section('page_name', 'Perfil')

@section('content')

  <main id="main">

  <section class="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="login-form w-50 position-relative mx-auto">
        <img class="user_photo"
        {{ $user->profile_photo_path ? "src=/storage/$user->profile_photo_path" : "src=/storage/profile-photos/default.webp" }}
             alt="Imagem User"
             width="200">
        <h2 class="w-100 text-center"><b>Nome:</b> {{ $user->name }}</h2>
        <h2 class="w-100 text-center"><b>Email:</b> {{ $user->email }}</h2>
        <a href="/user/profile" class="btn btn-primary my-2" role="button" aria-pressed="true">Alterar dados</a>
      </div>
    </div>
    </form>

  </section>

  @if ($user->admin == 1)
  <div id="admin-menu" class="m-5">
    <h2>Admin menu</h2>

    <a href="product" class="btn btn-primary my-2" role="button" aria-pressed="true">Novo Produto</a>

    <table class="table mt-2">
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Actions</th>
        </thead>
        <tbody>
    @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->categoria }}</td>
            <td>
                <a href="/product/{{ $produto->id }}" class="btn btn-success edit-btn"><ion-icon name="eye-outline"></ion-icon> Ver</a>
                <a href="/product/edit/{{ $produto->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                <form action="/product/{{ $produto->id }}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">
                        <ion-icon name="trash-outline"></ion-icon> Deletar
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
  </div>
  @endif
  </main>

@endsection

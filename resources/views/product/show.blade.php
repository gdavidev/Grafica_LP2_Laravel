@extends('layouts.main')

@section('page_name', 'Lotus: ' . $product->nome)

@section('content')

<main id="main">
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>{{ $product->nome }}</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Detalhes</li>
        </ol>
      </div>

    </div>
  </section>

  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="lign-items-center">

              <div class="swiper-slide">
                <img src="/img/products/{{ $product->image }}" alt="{{ $product->nome }}">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Categoria</strong>: {{ $product->categoria }}</li>
              <li><strong>Price</strong>: R$ {{ $product->preco }}</li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Sobre {{ $product->nome }}</h2>
            <p>{{ $product->descricao }}</p>
          </div>
        </div>

      </div>

    </div>
  </section>

</main>

@endsection

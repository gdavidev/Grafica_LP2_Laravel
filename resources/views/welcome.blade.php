@extends('layouts.main')

@section('page_name', 'Home')

@section('content')
<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <img class="img-fluid w-75" src="img/logo_transp2.png" alt="page_logo">
        </div>;
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3>Seu pedido até você</h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3>Melhores Avaliações</h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3>Receba em poucos dias</h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3>Alta Qualidade</h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3>Preços em Conta</h3>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Seja bem-vindo à <span>Lotus</span>: Qualidade e Eficiência para suas Necessidades de Impressão</h3>
            <p class="fst-italic">
            Somos uma gráfica dedicada a fornecer soluções de impressão de alta qualidade para atender às suas necessidades.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Qualidade excepcional.</li>
              <li><i class="ri-check-double-line"></i> Variedade de opções.</li>
              <li><i class="ri-check-double-line"></i> Atendimento ao cliente.</li>
            </ul>
            <p>
            Esses três pontos destacam o compromisso da nossa gráfica genérica com a qualidade, variedade e atendimento ao cliente,
            tornando-nos uma escolha confiável para suas necessidades de impressão.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Precisa de Ajuda?</h3>
          <p>Tire suas dúvidas, faça um orçamento ou compartilhe sua ideia de projeto conosco. Estamos prontos para ajudar!</p>
          <a class="cta-btn" href="#contact">Contato</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Produtos</h2>
          <p>De uma olhada nos nossos produtos</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tudo</li>
              <li data-filter=".filter-Lonas">Lonas</li>
              <li data-filter=".filter-Adesivos">Adesivos</li>
              <li data-filter=".filter-Placas">Placas</li>
              <li data-filter=".filter-Outros">Outros</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($produtos as $produto)

            <div class='col-lg-4 col-md-6 portfolio-item filter-{{ $produto->categoria }}'>
                <div class='portfolio-wrap'>
                    <img src='img/products/{{ $produto->image }}' class='img-fluid' alt=''>
                    <div class='portfolio-info'>
                        <h4>{{ $produto->nome }}</h4>
                        <p>{{ $produto->descricao }}</p>
                        <p>R$ {{ $produto->preco }}</p>
                        <div class='portfolio-links'>
                            <a  href='img/products/{{ $produto->image }}'
                                data-gallery='portfolioGallery' class='portfolio-lightbox'
                                title='{{ $produto->nome }}'>
                                <ion-icon name="search-outline"></ion-icon>
                            </a>
                            <a  href='/product/{{ $produto->id }}'>
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="team" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="img/denis.jpg" class="testimonial-img" alt="">
                <h3>Denis Saavedra</h3>
                <h4>Backend</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tive que me virar nos trinta para acabar o trabalho no dia de entraga pq o bundão dormiu.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="img/gabriel.jpg" class="testimonial-img" alt="">
                <h3>Gabriel David</h3>
                <h4>Frontend</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Mano, desmaiei de sono hj... não consegui resolver o problema do perfil, É isso mano, se quiser tem tempo de resolver em aula amanhã, Vejo oq eu consigo fazer amanhã.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contato</h2>
          <p>Entre em contato</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contato@printinglotus.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+55 (11) 91234-5678</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="../controller/processar_contato.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nome" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="assunto" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="mensagem" rows="5" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="sent-message">Obrigado pelo Contato!</div>
              </div>
              <div class="text-center"><button onclick="Enviar()" type="submit">Enviar</button></div>
            </form>
            <script>
              function Enviar () {
                var form = document.querySelector("form");
                form.querySelector(".sent-message").classList.add("d-block");
                form.reset();
              }
            </script>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection


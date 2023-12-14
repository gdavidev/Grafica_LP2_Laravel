<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="/css/dropdown.css" rel="stylesheet">
  <link href="/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">

  <link href="img/logo.ico" rel="icon">
  <title>@yield('page_name') - Lotus</title>
</head>
  <!-- ======= End-Head ======= -->

  <!-- ======= Header ======= -->
<header id="header" class="fixed-top header-scrolled">
<div class="container d-flex align-items-center justify-content-lg-between">

    <a href="/" class="logo me-auto me-lg-0"><img src="/img/logo_transp.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a class="nav-link scrollto" href="/#hero">Início</a></li>
            <li><a class="nav-link scrollto" href="/#about">Sobre</a></li>
            <li><a class="nav-link scrollto" href="/#portfolio">Produtos</a></li>
            <li><a class="nav-link scrollto" href="/#team">Nós</a></li>
            <li><a class="nav-link scrollto" href="/#contact">Contato</a></li>
            @auth
            <div class="dropdown dropdown-menu-right">
                <a type="button" data-toggle="dropdown">
                    <img id="user_photo"
                         {{ $user->profile_photo_path ? "src=/storage/$user->profile_photo_path" : "src=/storage/profile-photos/default.webp" }}
                         alt="Foto do Usuario">
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/dashboard">Perfil</a></li>
                    <li role="presentation">
                        <form action="/logout" method="POST">
                            @csrf
                            <a  role="menuitem"
                                tabindex="-1"
                                href="/logout"
                                class="nav-link"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                Sair
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
            @guest
                <li><a href="/login" class="get-started-btn">Login / Sign-in</a></li>
            @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
</div>
</header>

@yield('content')

<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Lotus</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Gabriel D. & Denis Saavedra</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Vendor JS Files -->
    <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>

</body>

</html>

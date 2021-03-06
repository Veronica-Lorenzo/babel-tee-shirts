<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">


  <!-- Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('icons/android-chrome-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('icons/site.webmanifest') }}">
  <link rel="mask-icon" href="asset('icons/safari-pinned-tab.svg')" color="#f9dc3e">
  <meta name="msapplication-TileColor" content="#c49400">
  <meta name="msapplication-TileImage" content="{{ asset('icons/mstile-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">


  <!-- Scrips -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  {{-- <script src="js/bootstrap.min.js"></script> --}}
  <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>


</head>
<body id="app">
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>


  <!-- Header section -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left">
            <!-- logo -->
            <a href="{{ route('index') }}" class="site-logo my-auto">
              <img src="{{ asset('img/babel.svg') }}" alt="" class="babel-svg" />
            </a>
          </div>
          <div class="col-xl-4 col-lg-5">
            <form class="header-search-form centered">
              <input type="text" placeholder="Buscar en babel ...." />
              <button><i class="flaticon-search"></i></button>
            </form>
          </div>
          <div class="col-xl-6 col-lg-5">
            <div class="user-panel">
              <div class="up-item">
                @guest
                <div class="row">
                  <i class="flaticon-profile"></i>
                  <a class="btn nav-item" href="{{ route('login') }}">Iniciar sesión</a>
                  @if (Route::has('register'))
                  <a class="btn nav-item" href="{{ route('register') }}">Registrarse</a>
                </div>
                @endif
                @else
                <div class="row">
                  <i class="flaticon-profile"></i>
                  <span class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </span>
                </div>
                @endguest
              </div>
              <div class="up-item">
                <div class="shopping-card">
                  <i class="flaticon-bag"></i>
                  <span>2</span>
                </div>
                <a href="#">Carrito de compras</a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    @if (Request::url() != route('login') && Request::url() != route('register'))
    <nav class="main-navbar">
      <div class="container">
        <!-- menu -->
        <ul class="main-menu">
          <li><a href="#">Inicio</a></li>
          <li>
            <a href="#">
              Tee-shirts
              <span class="new">Nuevo</span>
            </a>
            <ul class="sub-menu">
              <li><a href="#">Hombres</a></li>
              <li><a href="#">Mujeres</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages (test)</a>
            <ul class="sub-menu">
              <li><a href="#">Product Page</a></li>
              <li><a href="#">Category Page</a></li>
              <li><a href="#">Cart Page</a></li>
              <li><a href="#">login</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    @endif


  </header>
  <!-- Header section end -->

  <!-- Content -->
  @yield('content')


  <!-- Footer section -->
  <section class="footer-section">
    <div class="container">
      <div class="footer-logo text-center">
        <a href="{{ route('index') }}"><img src="{{ asset('img/babel.svg') }}" alt="" class="babel-svg" /></a>
      </div>
      <div class="row spacing">
        <div class="col-lg-4 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Acerca de nosotros:</h2>
            <p>
              Somos una marca de playeras juveniles, trayendo únicos diseños
              llenos de estilo y personalidad.
            </p>
            <img src="img/cards.png" alt="" />
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="footer-widget about-widget">
            <a href="#">
              <h2 class="footer-questions">¿Preguntas?</h2>
            </a>
            <ul>
              <li><a href="#">Acerca de nosotros</a></li>
              <li><a href="#">Devoluciones</a></li>
              <li><a href="#">Envios</a></li>
            </ul>
            <ul>
              <li><a href="#">Marcas</a></li>
              <li><a href="#">Atención al cliente</a></li>
              <li><a href="#">Aviso de privacidad</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="footer-widget contact-widget">
            <a href="#">
              <h2 class="footer-questions">Sucursales</h2>
            </a>
            <div class="con-info">
              <span>1. </span>
              <p><a href="#">Querétaro</a></p>
            </div>
            <div class="con-info">
              <span>2. </span>
              <p><a href="#">CDMX</a></p>
            </div>
            <div class="con-info">
              <span>3. </span>
              <p><a href="#">Guadalajara</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-links-warp">
      <div class="container">
        <div class="social-links">
          <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
          <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
          <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
        </div>

        <p class="text-white text-center mt-5">
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());

          </script>
          All rights reserved | ⌨ con 💛 por
          <a href="#">Abstraction</a>
        </p>
      </div>
    </div>
  </section>
  <!-- Footer section end -->

</body>
</html>

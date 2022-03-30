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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar_2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/generales.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

     @yield('css')

</head>

<body id="body-pd" class="@yield('bg')">

    @guest

    @else
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu'  id="header-toggle"></i>
        </div>

        <div class="tlttle_username text-center">
            SUCURSAL    01 - Condesa Nuevo León <br>
            {{ Auth::user()->name }}
        </div>

        <div class="btn-group">
            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: solid 1px transparent;
            background: transparent;">
                <div class="header_img">
                    <img src="{{asset('image/logo_neon.png')}}" alt="">
                </div>
            </button>
            <ul class="dropdown-menu">
                <a href="#" class="nav_link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                     <span class="nav_name">{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
          </div>


    </header>

    <div class="l-navbar" id="nav-bar">
            <main>
                <div class="flex-shrink-0 p-3" style="width: 280px;background:·#C4C6D3">
                    <a href="{{ url('/') }}" class="nav_logo">
                        <img class="" src="{{asset('image/logo_neon.png')}}" alt="Logo" style="width: 30px">
                        <span class="nav_logo-name text-dark">Klin</span>
                  </a>
                  <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                      <button class="btn  align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        <i class="fa fa-usd nav_icon" aria-hidden="true"></i>Nueva Venta
                      </button>
                      <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="#" class="link-dark rounded">SERVICIOS ACTIVOS</a></li>
                          <li><a href="#" class="link-dark rounded">PROMOCIONES</a></li>
                          <li><a href="#" class="link-dark rounded">CONTABILIDAD</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="mb-1">
                      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        NUEVO CLIENTE
                      </button>
                      <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="#" class="link-dark rounded">CLIENTES</a></li>
                          <li><a href="#" class="link-dark rounded">RACKS</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="mb-1">
                      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                        SUCURSAL
                      </button>
                      <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="#" class="link-dark rounded">PRODUCTOS </a></li>
                          <li><a href="#" class="link-dark rounded">RECURSOS</a></li>

                        </ul>
                      </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        CONFIGURACIÓN
                      </button>
                      <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="#" class="link-dark rounded">Profile</a></li>
                          <li><a href="#" class="link-dark rounded">Settings</a></li>
                          <li><a href="#" class="link-dark rounded">Sign out</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </main>
    </div>

    @endguest

    <!--Container Main start-->
     @yield('content')

    <script src="{{ asset('js/sidebar.js') }}" defer></script>
    <script src="{{ asset('js/') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    @include('sweetalert::alert')
    @yield('js')

     <script>
        $(window).on("load", function(){
          function clickbutton() {
            // simulamos el click del mouse en el boton del formulario
            $("#header-toggle").click();
          }
          setTimeout(clickbutton, 0);
      })

         $(document).ready(function () {
            $.noConflict();
            var table = $('#tale_id').DataTable(

            );
         });
        $('#tale_id').DataTable( {
            autoFill: true,
            responsive: true,
             fixedHeader: true
        } );
     </script>

</body>

</html>

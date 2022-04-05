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
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

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

        <div class="btn-group">
          <p style="margin-right: 3rem;">
                SUCURSAL
            </p>
          </div>

        <div class="btn-group">
            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: solid 1px transparent;
            background: transparent;">Condesa Nuevo León <br>{{ Auth::user()->name }}
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

        <div class="btn-group">
                <div class="header_img">
                    <img src="{{asset('image/logo_neon.png')}}" alt="">
                </div>

          </div>
    </header>

    <div class="l-navbar" id="nav-bar">
            <main>
                <div class="flex-shrink-0 p-3" style="width: 280px;background:·#C4C6D3">
                    <a href="{{ url('/') }}" class="nav_logo">
                        <img class="" src="{{asset('image/logo_neon.png')}}" alt="Logo" style="width: 60px">
                        <span class="nav_logo-name text-dark" style="font-size: 30px;">Klin</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-auto" style="height: auto;">

                          <li class="nav-item button_sidebar_padre2  ">
                              <a href="{{ route('ticket.create') }}">
                              <div class="input-group @yield('active1')" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend  sidebar_box_icon">
                                  <span class="input-group-text  span_sidebar" >
                                       <i class="fa fa-usd nav_icon_sidebar_morado" aria-hidden="true" ></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar_morado">NUEVA VENTA</div>
                              </div>
                              </a>
                          </li>

                          <li class="nav-item button_sidebar_padre2  ">
                              <a href="{{ route('ticket.index') }}">
                              <div class="input-group @yield('active2') hover2" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend">
                                  <span class="input-group-text span_sidebar" >
                                       <i class='bx bxs-right-arrow nav_icon_sidebar2'></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar hover2">SERVICIOS ACTIVOS</div>
                              </div>
                              </a>
                          </li>

                          <li class="nav-item button_sidebar_padre2  ">
                              <div class="input-group @yield('active3') hover2" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend">
                                  <span class="input-group-text span_sidebar" >
                                       <i class='bx bxs-right-arrow nav_icon_sidebar2'></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar hover2">PROMOCIONES</div>
                              </div>
                          </li>

                          <li class="nav-item button_sidebar_padre2  ">
                              <div class="input-group @yield('active4') hover2" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend">
                                  <span class="input-group-text span_sidebar" >
                                       <i class='bx bxs-right-arrow nav_icon_sidebar2'></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar hover2">CONTABILIDAD</div>
                              </div>
                          </li>

                          <li class="nav-item button_sidebar_padre2  ">
                              <a href="{{ route('clients.create') }}">
                              <div class="input-group @yield('active5')" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend">
                                  <span class="input-group-text span_sidebar" >
                                       <i class="fa fa-user nav_icon_sidebar_morado" aria-hidden="true" ></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar_morado">NUEVO CLIENTE</div>
                              </div>
                              </a>
                          </li>

                          <li class="nav-item button_sidebar_padre2">
                              <a href="{{ route('clients.index') }}">
                              <div class="input-group @yield('active6') hover2" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend ">
                                  <span class="input-group-text span_sidebar " >
                                       <i class='bx bxs-right-arrow nav_icon_sidebar2 '></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar hover2">CLIENTES</div>
                              </div>
                              </a>
                          </li>

                          <li class="nav-item button_sidebar_padre2  ">
                              <div class="input-group @yield('active7') hover2" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend">
                                  <span class="input-group-text span_sidebar" >
                                       <i class='bx bxs-right-arrow nav_icon_sidebar2 '></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar hover2">RACKS</div>
                              </div>
                          </li>

                          <li class="nav-item button_sidebar_padre2 ">
                              <div class="input-group @yield('active8')" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend">
                                  <span class="input-group-text span_sidebar" >
                                       <i class="fa fa-desktop nav_icon_sidebar_morado" aria-hidden="true" ></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar_morado">SUCURSAL</div>
                              </div>
                          </li>

                          <li class="nav-item button_sidebar_padre2  ">
                              <div class="input-group @yield('active9') hover2" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend">
                                  <span class="input-group-text span_sidebar" >
                                       <i class='bx bxs-right-arrow nav_icon_sidebar2 '></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar hover2">PRODUCTOS</div>
                              </div>
                          </li>

                          <li class="nav-item button_sidebar_padre2  ">
                              <div class="input-group @yield('active10') hover2" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend">
                                  <span class="input-group-text span_sidebar" >
                                       <i class='bx bxs-right-arrow nav_icon_sidebar2 '></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar hover2">RECURSOS</div>
                              </div>
                          </li>

                          <li class="nav-item button_sidebar_padre2 ">
                              <div class="input-group @yield('active11')" style="border: solid 1px #a5a5a5;">
                                <div class="input-group-prepend">
                                  <span class="input-group-text span_sidebar" >
                                       <i class="fa fa-cog nav_icon_sidebar_morado" aria-hidden="true" ></i>
                                  </span>
                                </div>
                                <div class="form-control div_text_sidebar_morado">CONFIGURACIÓN</div>
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
            var table = $('#tale_id').DataTable({
                "ordering": false,
                autoFill: true,
                responsive: true,
                fixedHeader: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
                }
            });
         });
     </script>

</body>

</html>

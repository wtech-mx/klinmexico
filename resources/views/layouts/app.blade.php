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

    @yield('css')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

</head>

<body id="body-pd" class="@yield('bg')">

    @guest

    @else
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="tlttle_username text-center">
            SUCURSAL    01 - Condesa Nuevo León <br>
            {{ Auth::user()->name }}

        </div>


        <div class="header_img">
            <img src="{{asset('image/logo_neon.png')}}" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ url('/') }}" class="nav_logo">
                    <img class="" src="{{asset('image/logo_neon.png')}}" alt="Logo" style="width: 30px">
                    <span class="nav_logo-name">Klin</span>
                </a>

                <div class="nav_list">

                     <a href="#" class="nav_link">
                         <i class='bx bx-money-withdraw nav_icon'></i>
                         <span class="nav_name">Nueva Venta</span>
                    </a>

                     <a href="#" class="nav_link">
                         <i class='bx bxs-check-circle nav_icon'></i>
                         <span class="nav_name">Servicios Activos </span>
                    </a>

                     <a href="#" class="nav_link">
                         <i class='bx bx-certification nav_icon'></i>
                         <span class="nav_name">Promociones </span>
                    </a>

                     <a href="#" class="nav_link">
                         <i class='bx bx-money nav_icon'></i>
                         <span class="nav_name">Contabilidad </span>
                    </a>

                     <a href="#" class="nav_link">
                         <i class='bx bx-walk nav_icon'></i>
                         <span class="nav_name">Clientes </span>
                    </a>

                     <a href="#" class="nav_link">
                         <i class='bx bx-checkbox nav_icon' ></i>
                         <span class="nav_name">Racks</span>
                    </a>

                     <a href="#" class="nav_link">
                         <i class='bx bxs-store nav_icon' ></i>
                         <span class="nav_name">Sucursal</span>
                    </a>

                     <a href="{{ route('products.index') }}" class="nav_link">
                         <i class='bx bx-shopping-bag nav_icon' ></i>
                         <span class="nav_name">Productos</span>
                    </a>

                     <a href="#" class="nav_link">
                         <i class='bx bxs-cog nav_icon'></i>
                         <span class="nav_name">Configuracion</span>
                    </a>

                     <a href="{{ route('roles.index') }}" class="nav_link">
                        <i class='bx bxs-user-detail nav_icon'></i>
                         <span class="nav_name">Role</span>
                    </a>

                     <a href="{{ route('users.index') }}" class="nav_link">
                         <i class='bx bx-user nav_icon'></i>
                         <span class="nav_name">Users</span>
                    </a>

                </div>
            </div>

            <a href="#" class="nav_link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                 <i class='bx bx-log-out nav_icon'></i>
                 <span class="nav_name">{{ __('Logout') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </div>
    @endguest

    <!--Container Main start-->
     @yield('content')

    <script src="{{ asset('js/sidebar.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    @yield('js')
     <script>
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

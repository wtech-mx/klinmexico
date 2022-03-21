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

    @yield('css')


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

</head>


<body oncontextmenu='return false' class='snippet-body'>
<body id="body-pd">

    @guest

    @else
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="tlttle_username">
            {{ Auth::user()->name }}
        </div>

        <div class="header_img">
            <img src="https://i.imgur.com/hczKIze.jpg" alt="">
        </div>
    </header>


    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ url('/') }}" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">Logo</span>
                </a>

                <div class="nav_list">

                     <a href="#" class="nav_link active">
                         <i class='bx bx-grid-alt nav_icon'></i>
                         <span class="nav_name">Dashboard</span>
                    </a>

                     <a href="{{ route('users.index') }}" class="nav_link">
                         <i class='bx bx-user nav_icon'></i>
                         <span class="nav_name">Users</span>
                    </a>

                     <a href="{{ route('roles.index') }}" class="nav_link">
                        <i class='bx bxs-user-detail nav_icon'></i>
                         <span class="nav_name">Role</span>
                    </a>
                     <a href="{{ route('products.index') }}" class="nav_link">
                         <i class='bx bx-bookmark nav_icon'></i>
                         <span class="nav_name">ProductS</span>
                    </a>
                     <a href="#" class="nav_link">
                         <i class='bx bx-folder nav_icon'></i>
                         <span class="nav_name">Files</span>
                    </a>
                     <a href="#" class="nav_link">
                         <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                         <span class="nav_name">Stats</span>
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
    <div class="height-100 bg-light">
        @yield('content')
    </div>

<script src="{{ asset('js/sidebar.js') }}" defer></script>

@yield('js')


</body>

</html>

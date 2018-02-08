<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <title>{{ config('app.name', 'Laravel Foro') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app2.js') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        
                    <!-- Branding Image -->
                    <div style="margin-left: -8%">
                        <div style="margin-top: -5%">
                            <a class="navbar-brand" href="{{ url('inicio') }}">
                                <IMG SRC="{{ asset('img/titulo.png') }}" WIDTH=160 HEIGHT="40" ALT="Laravel Foro">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @else
                        
                            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                            <ul class="dropdown-menu">
                            	<li><a href="{{ url('inicio/perfil') }}" class="btn btn-success " role="button"><span class="glyphicon glyphicon-user"></span> Ver tu Perfil </a></li>
                            	<li><a href="#" role="button"><span class="glyphicon glyphicon-plus"></span> Crear Tag </a></li>
                                <li><a href="#" role="button"><span class="glyphicon glyphicon-plus"></span> Crear Hashtag </a></li>
                                <li><a href="{{ url('inicio/crearPost') }}"  role="button"><span class="glyphicon glyphicon-plus"></span> Crear Post </a></li>
                            	<li role="presentation" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}" class="btn btn-danger "
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout <span class="glyphicon glyphicon-log-out"></span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                           
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

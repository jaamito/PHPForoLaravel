<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <title>Laravel foro</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app2.js') }}" rel="stylesheet">
    <style type="text/css">

    </style>
</head>
@if(Auth::user()->ban === "1")
<nav class="navbar navbar-inverse" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>

    </button>
        <a class="navbar-brand" href="{{ url('inicio') }}">
            <span class="glyphicon glyphicon-home" style="color: white;"></span>  INICIO
        </a>

  </div>
  <!--INVITADO-->
    @guest
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Registrar</a></li>
    @else
    <!--INVITADO-->
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li><a href="{{ url('inicio/crearPost') }}"  role="button"><span class="glyphicon glyphicon-plus" style="color: green;"></span> Crear Post </a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Tags <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('inicio/crearTag') }}" role="button"><span class="glyphicon glyphicon-plus" style="color: green;"></span> Crear Tag </a></li>
          <li class="divider"></li>
          <li><a href="{{ url('inicio/verTags') }}" role="button"><span class="glyphicon glyphicon-plus" style="color: green;"></span> Ver Tags </a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar Tag">
        </div>
            <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" style="text-align: center;">
            <li><a href="{{ url('inicio/perfil') }}" role="button"><span class="glyphicon glyphicon-user"></span> Ver tu Perfil </a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout <span class="glyphicon glyphicon-log-out"></span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
  </div>
</nav>
@endguest
@yield('content')
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
@else
<style type="text/css">
.centrar{
  text-align: center;
  margin-top: 10%;
  width: 50%;
  margin-left: 25%;
}
</style>
<div class="panel panel-danger centrar">

  <div class="panel-heading">ESTAS BANEADO/A</div>
  <div class="panel-body" style="text-align: left;">
    <h2>Usuario Baneado/a:<strong> {{Auth::user()->name}}</strong></h2>
    <h3 style="text-align: center"><u>Motivo</u></h3>
    <p>{{Auth::user()->motivo}}</p>
  </div>
  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <button type="button" class="btn btn-primary">Volver al Inicio</button></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
  </br>
    <p>  </p>
</div>


@endif

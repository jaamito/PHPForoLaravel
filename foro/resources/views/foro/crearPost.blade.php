<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel foro</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app2.js') }}" rel="stylesheet">
    <style type="text/css">

    </style>
</head>
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
          <li><a href="{{ url('inicio/verTags') }}" role="button"><span class="glyphicon glyphicon-eye-open" style="color: green;"></span> Ver Tags </a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
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

<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Añadir Post
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">
            
                <form action="{{ url('inicio/crearPost') }}" method="POST">
                
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <!--Nombre usuario-->
                        <label>Nombre usuario:</label>
                        <input readonly="readonly" type="text" name="nombreUsuario" value="{{ Auth::user()->name }}" id="nombreUsuario" class="form-control">
                        
                        <label for="titulo">Titulo del Post</label>
                        <!-- -->
                        <input type="text" name="titulo" id="titulo" class="form-control" required>

                        <label for="texto">Texto Principal del Post</label>
                        <!-- -->
                        <textarea id="texto" name="texto" cols="44" class="form-control" required></textarea></br>

                       <select id="tag" name="tag" class="selectpicker" data-live-search="true">
                            @foreach( $arrayTags as $key => $tag )
                                <option value="{{$tag->id}}">{{$tag->nombre}}</option>
                            @endforeach
                        </select>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
                        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
                        <!--Id usuario-->
                        <input readonly="readonly" type="hidden" name="idUsuario" value="{{ Auth::user()->id }}" id="idUsuario" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Añadir Post
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!--stop-->